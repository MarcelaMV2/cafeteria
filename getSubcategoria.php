<?php 
include("conexion.php");

$idProd = $cnx->real_escape_string($_POST['id_prod']);

$sql = "SELECT ID_SUB,DESCRIP_SUB FROM SUBCATEGORIA WHERE ID_PROD = '$idProd' ORDER BY DESCRIP_SUB ASC";
$resultado = $cnx->query($sql);

$respuesta = "<option value=''>Selecciona</option>";
while($row = $resultado->fetch_assoc()){
    $respuesta .= "<option value='". $row['ID_SUB']. "'>". $row['DESCRIP_SUB']."</option>";
}

echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);?>
