<?php
$id_cliente=$_GET['id_cliente'];

$cnx = mysqli_connect("localhost","root","SerCu05/M20.","CAFETERIA");
$sql = "DELETE FROM PERSONAL WHERE id_cli LIKE $id_cliente";
$rta = mysqli_query($cnx, $sql);
if(!$rta){
    echo "No se Elimino!";
} else {
    header("location: cliente.php");
}
?>