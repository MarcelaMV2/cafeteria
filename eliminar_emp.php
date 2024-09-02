<?php
if(!empty($_GET["id"])){
    $id=$_GET["id"];
    $eliminar=$cnx->query("DELETE FROM PERSONAL WHERE ID_EMP='$id'");
}

?>