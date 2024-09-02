<?php
if(!empty($_POST['insertarPer'])){
    $nombre_emp=$_POST['nombreper'];
$apellido=$_POST['apper'];
$contacto=$_POST['contacto'];
$direccion=$_POST['dirper'];
$ci=$_POST['ciper'];
$cargo=$_POST['cargo'];
$contraseña=$_POST['contraseña'];


    $cnx = mysqli_connect("localhost","root","SerCu05/M20.","CAFETERIA");
    $sql = "INSERT INTO PERSONAL(NOMBRE_EMP,APELLIDO,CONTACTO,DIRECCION,CI,CARGO,CONTRASEÑA) VALUES('$nombre_emp','$apellido','$contacto','$direccion','$ci','$cargo','$contraseña')";
    $rta = mysqli_query($cnx, $sql);
}?>


<script>
    window.history.replaceState(null,null, window.location.pathname);
</script>