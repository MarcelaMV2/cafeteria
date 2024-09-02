<?php
        $id_cliente=$_GET["id_cliente"];
        $nombre_cli=$_GET['nombre_cli'];
        $ci_cliente=$_GET['ci_cliente'];
        $direccion=$_GET['direccion'];
        $fecha_cli=$_GET['fecha_cli'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cliente.css">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="sp_editarCli.php" method="post">
            <table border="1">
                <tr>
                    <td>INGRESAR DATOS: </td>
                    <td><input type="text" name="id_cliente" id="" style="visibility:hidden" value="<?=$id_cli?>"></td>
                </tr>
                <tr>
                    <td>NOMBRES:</td>
                    <td><input type="text" name="nombre_cli" id="" value="<?=$nombre_cli?>"></td>
                </tr>
                <tr>
                    <td>CI:</td>
                    <td><input type="number" name="ci_cliente" id="" value="<?=$ci_cliente?>"></td>
                </tr>
                <tr>
                    <td>DIRECCION:</td>
                    <td><input type="text" name="direccion" id="" value="<?=$direccion?>"></td>
                </tr>
                <tr>
                    <td>fecha:</td>
                    <td><input type="datetime" name="ci" id="" value="<?=$fecha?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="ACTUALIZAR"></td>
                    <td><a href="cliente.php">CANCELAR</a></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>