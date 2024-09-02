<?php 
include("conexion.php");

$idSub = $cnx->real_escape_string($_POST['id_sub']);

$sql = "SELECT PRECIO FROM SUBCATEGORIA WHERE ID_SUB = '$idSub'";
$resultado = $cnx->query($sql);

$respuesta = "<input type='number' class=formcontrol' name='precio' step='1'>";
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $row['precio'];
} else {
    echo "Producto no encontrado";
}

$mysqli->close();

while($row = $resultado->fetch_assoc()){
    $respuesta .= "<option value='". $row['ID_SUB']. "'>". $row['DESCRIP_SUB']."</option>";
}

echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);?>
