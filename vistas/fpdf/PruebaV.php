<?php

require('./fpdf.php');

class PDF extends FPDF
{

   function Header()
   {
      include '../../php/conexion_be.php';

      $consulta_info = $conexion->query(" select *from reservacitas ");
      $dato_info = $consulta_info->fetch_object();
      $this->Image('logodomos.jpg', 10, 5, 35); 
      $this->SetFont('Arial', 'B', 19); 
      $this->Cell(45); 
      $this->SetTextColor(64, 64, 64); //color
      //creacion de celda o fila
      $this->Cell(110, 15, utf8_decode('DOMOS ARQUITECTOS'), 0, 1, 'C', 0);
      $this->Ln(3); // Salto de línea
      $this->SetTextColor(103); //color

      /* UBICACION */
      $this->Cell(110);  
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(96, 10, utf8_decode("Ubicación : Av San Martin 170"), 0, 0, '', 0);
      $this->Ln(5);

      /* TELEFONO */
      $this->Cell(110);  
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(59, 10, utf8_decode("Teléfono : 993 380 964"), 0, 0, '', 0);
      $this->Ln(5);

      /* COREEO */
      $this->Cell(110);  
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(85, 10, utf8_decode("Correo : domosarquitectura@hotmail.com"), 0, 0, '', 0);
      $this->Ln(5);

      /* TELEFONO */
      $this->Cell(110);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(85, 10, utf8_decode("Sucursal : Ica"), 0, 0, '', 0);
      $this->Ln(10);

      /* TITULO DE LA TABLA */
      //color
      $this->SetTextColor(64, 64, 64);
      $this->Cell(50); // mover a la derecha
      $this->SetFont('Arial', 'B', 15);
      $this->Cell(100, 10, utf8_decode("REPORTE DE CITAS "), 0, 1, 'C', 0);
      $this->Ln(7);

      /* CAMPOS DE LA TABLA */
      //color
      $this->SetFillColor(169, 169, 169); //colorFondo
      $this->SetTextColor(0, 0, 0); //colorTexto
      $this->SetDrawColor(163, 163, 163); //colorBorde
      $this->SetFont('Arial', 'B', 9);
      $this->Cell(15, 10, utf8_decode('N°'), 1, 0, 'C', 1);
      $this->Cell(30, 10, utf8_decode('NOMBRE'), 1, 0, 'C', 1);
      $this->Cell(25, 10, utf8_decode('TELEFONO'), 1, 0, 'C', 1);
      $this->Cell(35, 10, utf8_decode('DIRECCION'), 1, 0, 'C', 1);
      $this->Cell(45, 10, utf8_decode('SERVICIO'), 1, 0, 'C', 1);
      $this->Cell(20, 10, utf8_decode('FECHA'), 1, 0, 'C', 1);
      $this->Cell(20, 10, utf8_decode('HORA'), 1, 1, 'C', 1);
   }

   // Pie de página
   function Footer()
   {
      $this->SetY(-15); // Posición: a 1,5 cm del final
      $this->SetFont('Arial', 'I', 8); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
      $this->Cell(0, 10, utf8_decode('Página ') . $this->PageNo() . '/{nb}', 0, 0, 'C'); //pie de pagina(numero de pagina)

      $this->SetY(-15); // Posición: a 1,5 cm del final
      $this->SetFont('Arial', 'I', 8); //tipo fuente, cursiva, tamañoTexto
      $hoy = date('d/m/Y');
      $this->Cell(355, 10, utf8_decode($hoy), 0, 0, 'C'); // pie de pagina(fecha de pagina)
   }
}

include '../../php/conexion_be.php';//llamamos a la conexion BD
/* CONSULTA INFORMACION DE CITAS */

$pdf = new PDF();
$pdf->AddPage("portrait"); /* aqui entran dos para parametros (horientazion,tamaño)V->portrait H->landscape tamaño (A3.A4.A5.letter.legal) */
$pdf->AliasNbPages(); //muestra la pagina / y total de paginas

$i = 0;
$pdf->SetFont('Arial', '', 8);
$pdf->SetDrawColor(163, 163, 163); //colorBorde

// Realiza la consulta a la base de datos
$consulta_reporte_citas = $conexion->query("
    SELECT 
        reservacitas.servicio,
        reservacitas.nombres,
        reservacitas.apellidos,
        reservacitas.telefono,
        reservacitas.direccion,
        reservacitas.fecha_cita,
        reservacitas.hora_cita 
    FROM reservacitas
");

// Verifica si la consulta fue exitosa
if ($consulta_reporte_citas) {
    // Inicializa el contador
    $i = 0;

    // Recorre los resultados de la consulta
    while ($datos_reporte = $consulta_reporte_citas->fetch_object()) {
        // Incrementa el contador
        $i++;

        // Añade una fila a la tabla en el PDF
        $pdf->Cell(15, 10, utf8_decode($i), 1, 0, 'C', 0);
        $pdf->Cell(30, 10, utf8_decode($datos_reporte->nombres . " " . $datos_reporte->apellidos), 1, 0, 'C', 0);
        $pdf->Cell(25, 10, utf8_decode($datos_reporte->telefono), 1, 0, 'C', 0);
        $pdf->Cell(35, 10, utf8_decode($datos_reporte->direccion), 1, 0, 'C', 0);
        $pdf->Cell(45, 10, utf8_decode($datos_reporte->servicio), 1, 0, 'C', 0);
        $pdf->Cell(20, 10, utf8_decode($datos_reporte->fecha_cita), 1, 0, 'C', 0);
        $pdf->Cell(20, 10, utf8_decode($datos_reporte->hora_cita), 1, 1, 'C', 0);
    }
} else {
    // Manejo de error en caso de que la consulta falle
    echo "Error en la consulta: " . $conexion->error;
}



$pdf->Output('Prueba.pdf', 'I');//nombreDescarga, Visor(I->visualizar - D->descargar)