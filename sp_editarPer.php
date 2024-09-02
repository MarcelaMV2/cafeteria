<?php
$id_emp=$_POST['id_emp'];
$nombre_emp=$_POST['nombre_emp'];
$apellido=$_POST['apellido'];
$contacto=$_POST['contacto'];
$direccion=$_POST['direccion'];
$ci=$_POST['ci'];
$cargo=$_POST['cargo'];
$contraseña=$_POST['contraseña'];

$cnx = mysqli_connect("localhost","root","SerCu05/M20.","CAFETERIA");
$sql = "UPDATE PERSONAL SET NOMBRE_EMP='$nombre_emp',APELLIDO='$apellido',CONTACTO='$contacto',
DIRECCION='$direccion',CI='$ci',CARGO='$cargo',CONTRASEÑA='$contraseña' WHERE id_emp LIKE $id_emp";
$rta = mysqli_query($cnx, $sql);
if(!$rta){
    echo "No se actualizo!";
} else {
    header("location: personal.php");
}
?>