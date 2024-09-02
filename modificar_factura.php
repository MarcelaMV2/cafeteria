<?php
if(!empty($_POST['modificarF'])){
    $idfact=$_POST['idfact'];
    $nombrecliente=$_POST['nombrecliente'];
    $cicliente=$_POST['cicliente'];
    $costotal=$_POST['costotal'];


    if(!empty($_POST["nombrecliente"]) and !empty($_POST["cicliente"])){
        $registro = $cnx->query("UPDATE FACTURA SET NOMBRE_CLI='$nombrecliente',CI_CLIENTE='$cicliente',COSTOTOTAL='$costotal' WHERE ID_FACT='$idfact'");

    }else {
        echo "<div class='alert alert-danger'>Debe llenar todos los campos</div>";
    }
}
?>

<script>
    window.history.replaceState(null,null, window.location.pathname);
</script>