<?php
if(!empty($_GET["id"])){
    $id=$_GET["id"];
    $eliminar=$cnx->query("DELETE FROM DETALLE_TEM WHERE ID_TEM='$id'");
}

?>