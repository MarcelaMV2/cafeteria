<?php
if(!empty($_GET["id"])){
    $id=$_GET["id"];
    $eliminar=$cnx->query("DELETE FROM FACTURA WHERE ID_FACT='$id'");
}

?>