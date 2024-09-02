<?php
$nombre_cli=$_POST['nombre_cli'];
$ci_cliente=$_POST['ci_cliente'];
$direccion=$_POST['direccion'];

$cnx = mysqli_connect("localhost","root","SerCu05/M20.","CAFETERIA");
$sql = "INSERT INTO CLIENTE(NOMBRE_CLI,CI_CLIENTE,DIRECCION,FECHA_CLI) VALUES('$nombre_cli','$ci_cliente','$direccion',NOW())";
$rta = mysqli_query($cnx, $sql);
if(!$rta){
    echo "No se Inserto!";
} else {
    header("location: cliente.php");
}
?>