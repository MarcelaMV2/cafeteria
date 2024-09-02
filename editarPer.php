<?php
        $id_emp=$_GET["id_emp"];
        $nombre_emp=$_GET['nombre_emp'];
        $apellido=$_GET['apellido'];
        $contacto=$_GET['contacto'];
        $direccion=$_GET['direccion'];
        $ci=$_GET['ci'];
        $cargo=$_GET['cargo'];
        $contraseña=$_GET['contraseña'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="personal.css">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="sp_editarPer.php" method="post">
            <table border="1">
                <tr>
                    <td>INGRESAR DATOS: </td>
                    <td><input type="text" name="id_emp" id="" style="visibility:hidden" value="<?=$id_emp?>"></td>
                </tr>
                <tr>
                    <td>NOMBRES:</td>
                    <td><input type="text" name="nombre_emp" id="" value="<?=$nombre_emp?>"></td>
                </tr>
                <tr>
                    <td>APELLIDOS:</td>
                    <td><input type="text" name="apellido" id="" value="<?=$apellido?>"></td>
                </tr>
                <tr>
                    <td>CONTACTO:</td>
                    <td><input type="text" name="contacto" id="" value="<?=$contacto?>"></td>
                </tr>
                <tr>
                    <td>DIRECCION:</td>
                    <td><input type="text" name="direccion" id="" value="<?=$direccion?>"></td>
                </tr>
                <tr>
                    <td>CI:</td>
                    <td><input type="text" name="ci" id="" value="<?=$ci?>"></td>
                </tr>
                <tr>
                    <td>CARGO:</td>
                    <td><input type="text" name="cargo" id="" value="<?=$cargo?>"></td>
                </tr>
                <tr>
                    <td>CONTRASEÑA:</td>
                    <td><input type="text" name="contraseña" id="" value="<?=$contraseña?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="ACTUALIZAR"></td>
                    <td><a href="personal.php">CANCELAR</a></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>