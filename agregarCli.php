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
        <form action="sp_insertarCli.php" method="post">
            <table border="1">
                <tr>
                    <td>INGRESAR DATOS: </td>
                </tr>
                <tr>
                    <td>NOMBRES:</td>
                    <td><input type="text" name="nombre_cli" id=""></td>
                </tr>
                <tr>
                    <td>CI:</td>
                    <td><input type="number" name="ci_cliente" id=""></td>
                </tr>
                <tr>
                    <td>DIRECCION:</td>
                    <td><input type="text" name="direccion" id=""></td>
                </tr>
                <tr>
                    <td><input type="submit" value="GUARDAR"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>