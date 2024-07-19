<?php
require '../../../DependenciasComposer/vendor/autoload.php'; // Ruta ajustada

include('conexion_be.php'); // Asegúrate de que esta ruta es correcta y el archivo existe


use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function generarExcel($conn) {
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
        $temp_file = tempnam(sys_get_temp_dir(), $filename);
        $writer->save($temp_file);

        return $temp_file;
    } else {
        return false;
    }
}

function enviarCorreo($temp_file, $email_to) {
    $mail = new PHPMailer(true);
    try {
        // Configuración del servidor de correo
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'alboroto19@gmail.com';
        $mail->Password = 'vofu lonf wljx yohb';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Opciones de SSL (no recomendable para producción)
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        // Configuración del correo
        $mail->setFrom('alboroto19@gmail.com', 'Lumar');
        $mail->addAddress($email_to);
        $mail->addAttachment($temp_file, 'Listado_de_Citas_Reservadas.xlsx');

        // Contenido del correo
        $mail->isHTML(true);
        $mail->Subject = 'Listado de Citas Reservadas';
        $mail->Body = 'Adjunto encontrarás el listado de citas reservadas en formato Excel.';

        $mail->send();
        return true;
    } catch (Exception $e) {
        // Mostrar el error detallado
        echo "<div class='alert alert-danger' role='alert'>Hubo un error al enviar el correo. Error: {$mail->ErrorInfo}</div>";
        return false;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email_to = $_POST['email_to']; // El correo electrónico al que se enviará el archivo

    $temp_file = generarExcel($conn);
    if ($temp_file) {
        if (enviarCorreo($temp_file, $email_to)) {
            echo "<div class='alert alert-success' role='alert'>El correo ha sido enviado exitosamente.</div>";
        
        } else {
            // Error ya mostrado en enviarCorreo
        }
        unlink($temp_file); // Eliminar el archivo temporal
    } else {
        echo "<div class='alert alert-warning' role='alert'>No hay datos para mostrar.</div>";
    }
}
?>