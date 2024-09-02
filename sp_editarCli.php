<?php
$id_cliente=$_POST['id_cliente'];
$nombre_cli=$_POST['nombre_cli'];
$ci_cliente=$_POST['ci_cliente'];
$direccion=$_POST['direccion'];
$fecha_cli=$_POST['fecha_cli'];

$cnx = mysqli_connect("localhost","root","SerCu05/M20.","CAFETERIA");
$sql = "UPDATE PERSONAL SET NOMBRE_CLI='$nombre_CLI',CI_CLIENTE='$ci_cliente',DIRECCION='$direccion',FECHA_CLI='$fecha_cli'WHERE id_cliente LIKE $id_cliente";
$rta = mysqli_query($cnx, $sql);
if(!$rta){
    echo "No se actualizo!";
} else {
    header("location: cliente.php");
}
?>