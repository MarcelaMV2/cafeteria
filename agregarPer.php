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
        <form action="sp_insertarPer.php" method="post">
            <table border="1">
                <tr>
                    <td>INGRESAR DATOS: </td>
                </tr>
                <tr>
                    <td>NOMBRES:</td>
                    <td><input type="text" name="nombre_emp" id=""></td>
                </tr>
                <tr>
                    <td>APELLIDOS:</td>
                    <td><input type="text" name="apellido" id=""></td>
                </tr>
                <tr>
                    <td>CONTACTO:</td>
                    <td><input type="text" name="contacto" id=""></td>
                </tr>
                <tr>
                    <td>DIRECCION:</td>
                    <td><input type="text" name="direccion" id=""></td>
                </tr>
                <tr>
                    <td>CI:</td>
                <td><input type="text" name="ci" id=""></td>
                </tr>
                <tr>
                    <td>CARGO:</td>
                    <td><input type="text" name="cargo" id=""></td>
                </tr>
                <tr>
                    <td>CONTRASEÑA:</td>
                    <td><input type="text" name="contraseña" id=""></td>
                </tr>
                <tr>
                    <td><input type="submit" value="GUARDAR"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>