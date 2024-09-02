<?php
require('./fpdf.php'); // Asegúrate de que la ruta sea correcta

// Crear instancia de FPDF
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 10);

      // Agregar texto
$pdf->SetFont('Arial', 'I', 12);
$pdf->Cell(0, 5, 'CAFFETERIUM', 0, 1, 'C'); // Texto centrado
$pdf->Cell(0, 5, 'CAFETERIA DE ESPECIALIDAD', 0, 1, 'C'); // Texto centrado
$pdf->Cell(0, 5, 'Direccion: Calle Loa #45', 0, 1, 'C'); // Texto centrado
$pdf->Cell(0, 5, 'Telefono: 456789', 0, 1, 'C'); // Texto centrado
$pdf->Ln(3);

        $cnx = mysqli_connect("localhost","root","SerCu05/M20.","CAFETERIA");
        $sql = "SELECT ID_FACT,NOMBRE_CLI,CI_CLIENTE,FECHA,COSTOTOTAL FROM FACTURA ORDER BY ID_FACT DESC LIMIT 1";
        $rt = mysqli_query($cnx, $sql);
        while($row = mysqli_fetch_row($rt)){
        $idfact = $row[0];
        $nombrecli = $row[1];
        $cicli = $row[2];
        $fecha = $row[3];
        $costotal = $row[4];

        $pdf->Cell(40, 7, "Nro Factura");
        $pdf->Cell(50, 7, $idfact);
        $pdf->Cell(30, 7, "FECHA:");
        $pdf->Cell(40, 7, $fecha);
        $pdf->Ln();
        $pdf->Cell(20, 7, "Nombre: ");
        $pdf->Cell(70, 7, $nombrecli); // Texto centrado
        $pdf->Cell(20, 7, "CI:");
        $pdf->Cell(20, 7, $cicli); // Texto centrado
        $pdf->Ln(12);
        }

// Agregar imagen
$pdf->Image('logo.png', 270, 5, 20); // Cambia la ruta y las coordenadas según tus necesidades

// Encabezados de la tabla
$pdf->Cell(60, 7, "PRODUCTO");
$pdf->Cell(20, 7, "PRECIO");
$pdf->Cell(30, 7, "CANTIDAD");
$pdf->Cell(20, 7, "COSTO");
$pdf->Cell(30, 7, "MENSAJE");
//$pdf->Cell(30, 7, "E-mail");
$pdf->Ln();

// Obtener datos de la tabla MySQL (reemplaza con tu consulta)
include('../conexion.php'); // Archivo de conexión a la base de datos
/*$cnx = "SELECT PRODUCTO,PRECIO,CANTIDAD,TOTAL,MENSAJE FROM DETALLE_TEM";
$result = mysql_query($cnx);*/

/*$reporte= $cnx->query(" SELECT PRODUCTO,PRECIO,CANTIDAD,TOTAL,MENSAJE FROM DETALLE_TEM");

//while ($datos_reporte = $reporte->fetch_object()) {

//while ($rows = mysql_fetch_array($reporte)) {
    while ($rows = $reporte->fetch_object()) {*/

    $cnx = mysqli_connect("localhost","root","SerCu05/M20.","CAFETERIA");
        $sql = "SELECT PRODUCTO,PRECIO,CANTIDAD,TOTAL,MENSAJE FROM DETALLE_TEM";
        $rta = mysqli_query($cnx, $sql);
while($rows = mysqli_fetch_row($rta)){
    $producto = $rows[0];
    $precio = $rows[1];
    $cantidad = $rows[2];
    $total = $rows[3];
    $mensaje = $rows[4];

    // Agregar datos al PDF
    $pdf->Cell(60, 7, $producto);
    $pdf->Cell(20, 7, $precio);
    $pdf->Cell(30, 7, $cantidad);
    $pdf->Cell(20, 7, $total);
    $pdf->Cell(30, 7, $mensaje);
    $pdf->Ln();
}

$pdf->Ln(12);

        $cnx = mysqli_connect("localhost","root","SerCu05/M20.","CAFETERIA");
        $sql = "SELECT ID_FACT,NOMBRE_CLI,CI_CLIENTE,FECHA,COSTOTOTAL FROM FACTURA ORDER BY ID_FACT DESC LIMIT 1";
        $rt = mysqli_query($cnx, $sql);
        while($row = mysqli_fetch_row($rt)){
        $idfact = $row[0];
        $nombrecli = $row[1];
        $cicli = $row[2];
        $fecha = $row[3];
        $costotal = $row[4];

        $pdf->Cell(40, 7, "COSTO TOTAL: ");
        $pdf->Cell(50, 7, $costotal);
        $pdf->Ln(12);
        }
// Generar el PDF
$pdf->Output();
?>
