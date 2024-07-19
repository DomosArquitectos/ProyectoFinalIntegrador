<?php
require '../../../DependenciasComposer/vendor/autoload.php'; // Ruta ajustada

include('conexion_be.php'); // Asegúrate de que esta ruta es correcta y el archivo existe

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$sql = "SELECT * FROM reservacitas ORDER BY idCitas";
$resultado = mysqli_query($conn, $sql);

if ($resultado) {
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Encabezados de la tabla
    $sheet->setCellValue('A1', 'N°');
    $sheet->setCellValue('B1', 'Nombres y Apellidos');
    $sheet->setCellValue('C1', 'Teléfono');
    $sheet->setCellValue('D1', 'Dirección');
    $sheet->setCellValue('E1', 'Servicio');
    $sheet->setCellValue('F1', 'Fecha');
    $sheet->setCellValue('G1', 'Hora de cita');
    $sheet->setCellValue('H1', 'Horas');
    $sheet->setCellValue('I1', 'Descripción');

    // Datos de la tabla
    $row = 2;
    while ($fila = mysqli_fetch_array($resultado)) {
        $sheet->setCellValue('A' . $row, $fila['idCitas']);
        $sheet->setCellValue('B' . $row, $fila['nombres'] . ' ' . $fila['apellidos']);
        $sheet->setCellValue('C' . $row, $fila['telefono']);
        $sheet->setCellValue('D' . $row, $fila['direccion']);
        $sheet->setCellValue('E' . $row, $fila['servicio']);
        $sheet->setCellValue('F' . $row, $fila['fecha_cita']);
        $sheet->setCellValue('G' . $row, $fila['hora_cita']);
        $sheet->setCellValue('H' . $row, $fila['duracion']);
        $sheet->setCellValue('I' . $row, $fila['descripcion']);
        $row++;
    }

    $writer = new Xlsx($spreadsheet);
    $filename = 'Listado_de_Citas_Reservadas.xlsx';

    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="' . $filename . '"');
    header('Cache-Control: max-age=0');

    $writer->save('php://output');
    exit;
} else {
    echo "<div class='alert alert-warning' role='alert'>No hay datos para mostrar...</div>";
}
?>