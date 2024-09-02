<?php
if(!empty($_POST['insertar'])){
    $nombrecliente=$_POST['nombrecliente'];
    $cicliente=$_POST['cicliente'];
    $costotal=$_POST['costotal'];


    if(!empty($_POST["nombrecliente"]) and !empty($_POST["cicliente"])){
        $registro = $cnx->query("INSERT INTO FACTURA(NOMBRE_CLI,CI_CLIENTE,FECHA,COSTOTOTAL) VALUES('$nombrecliente','$cicliente',NOW(),'$costotal')");

    }else {
        echo "<div class='alert alert-danger'>Debe llenar todos los campos</div>";
    }
}
?>

<script>
    window.history.replaceState(null,null, window.location.pathname);
</script>