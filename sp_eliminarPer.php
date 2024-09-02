<?php
$id_emp=$_GET['id_emp'];

$cnx = mysqli_connect("localhost","root","SerCu05/M20.","CAFETERIA");
$sql = "DELETE FROM PERSONAL WHERE id_emp LIKE $id_emp";
$rta = mysqli_query($cnx, $sql);
if(!$rta){
    echo "No se Elimino!";
} else {
    header("location: personal.php");
}
?>