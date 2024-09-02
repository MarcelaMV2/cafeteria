<?php
if(!empty($_POST['modificarE'])){
    $idemp=$_POST['idemp'];
    $nombre_emp=$_POST['nombreper'];
$apellido=$_POST['apper'];
$contacto=$_POST['contacto'];
$direccion=$_POST['dirper'];
$ci=$_POST['ciper'];
$cargo=$_POST['cargo'];
$contraseña=$_POST['contraseña'];


$cnx = mysqli_connect("localhost","root","SerCu05/M20.","CAFETERIA");
$registro = $cnx->query("UPDATE PERSONAL SET NOMBRE_EMP='$nombre_emp',APELLIDO='$apellido',CONTACTO='$contacto',
DIRECCION='$direccion',CI='$ci',CARGO='$cargo',CONTRASEÑA='$contraseña' WHERE ID_EMP='$idemp'");
/*
$sql = "UPDATE PERSONAL SET NOMBRE_EMP='$nombre_emp',APELLIDO='$apellido',CONTACTO='$contacto',
DIRECCION='$direccion',CI='$ci',CARGO='$cargo',CONTRASEÑA='$contraseña' WHERE ID_EMP='$idemp'";*/
}
?>

<script>
    window.history.replaceState(null,null, window.location.pathname);
</script>