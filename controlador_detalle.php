<?php
if(!empty($_POST['anadir'])){
    $subcategoria=$_POST['subcategoria'];
    $mensaje=$_POST['comentario'];
    $precio=$_POST['precio'];
    $cantidad=$_POST['cantidad'];

    $precio1 = floatval($_POST['precio']);
    $cantidad2 = intval($_POST['cantidad']);
    $costo = $precio1 * $cantidad2;

   /* $subcategoria=$_POST['subcategoria'];
    $idSub=$cnx->query("SELECT ID_SUB FROM SUBCATEGORIA WHERE DESCRIP_SUB='$subcategoria'");*/
    $stmt = $cnx->prepare("SELECT DESCRIP_SUB FROM SUBCATEGORIA WHERE ID_SUB ='$subcategoria'");
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        // Obtén el ID de la subcategoría
        $row = $result->fetch_assoc();
        $idSub = $row['DESCRIP_SUB'];
    }

    if(!empty($_POST["subcategoria"]) and !empty($_POST["precio"]) and !empty($_POST["cantidad"])){
        $registro = $cnx->query("INSERT INTO DETALLE_TEM (ID_SUB,PRODUCTO,PRECIO,CANTIDAD,TOTAL,MENSAJE) VALUES('$subcategoria','$idSub','$precio','$cantidad','$costo','$mensaje')");

    }else {
        echo "<div class='alert alert-danger'>Debe llenar todos los campos</div>";
    }
}
?>

<script>
    window.history.replaceState(null,null, window.location.pathname);
</script>