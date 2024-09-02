<?php
$nombre_emp=$_POST['nombre_emp'];
$apellido=$_POST['apellido'];
$contacto=$_POST['contacto'];
$direccion=$_POST['direccion'];
$ci=$_POST['ci'];
$cargo=$_POST['cargo'];
$contraseña=$_POST['contraseña'];

$cnx = mysqli_connect("localhost","root","SerCu05/M20.","CAFETERIA");
$sql = "INSERT INTO PERSONAL(NOMBRE_EMP,APELLIDO,CONTACTO,DIRECCION,CI,CARGO,CONTRASEÑA) VALUES('$nombre_emp','$apellido','$contacto','$direccion','$ci','$cargo','$contraseña')";
$rta = mysqli_query($cnx, $sql);
if(!$rta){
    echo "No se Inserto!";
} else {
    header("location: personal.php");
}
?>