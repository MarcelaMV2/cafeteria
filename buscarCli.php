<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cliente.css">
    <title>Document</title>
</head>
<body>
    <div class="tabla">
    <div class="formulario">
        <form action="buscarCli.php" method="post">
            <input type="text" name="buscar" id="">
            <input type="submit" value="Buscar">
            <a href="agregarCli.php">Agregar</a>
        </form>
    </div>

    <div class="body_tabla">
        <table>
            <thead>
                <tr>
                    <td>ID CLIENTE</td>
                    <td>NOMBRE</td>
                    <td>CI</td>
                    <td>DIRECCION</td>
                    <td>FECHA</td>
                    <td>OPCIONES</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $buscar=$_POST['buscar'];
                $cnx = mysqli_connect("localhost","root","SerCu05/M20.","CAFETERIA");
                $sql = "SELECT ID_CLIENTE,NOMBRE_CLI,CI_CLIENTE,DIRECCION,FECHA_CLI FROM CLIENTE WHERE ID_CLIENTE='$buscar' ORDER BY ID_CLIENTE ASC";
                $rta = mysqli_query($cnx, $sql);
                while($mostrar = mysqli_fetch_row($rta)){
                ?>
                <tr>
                    <td><?php echo $mostrar['0'] ?></td>
                    <td><?php echo $mostrar['1'] ?></td>
                    <td><?php echo $mostrar['2'] ?></td>
                    <td><?php echo $mostrar['3'] ?></td>
                    <td><?php echo $mostrar['4'] ?></td>
                    <td> 
                        <a href="editarCli.php? 
                        id_cliente=<?php echo $mostrar['0'] ?> &
                        nombre_cli=<?php echo $mostrar['1'] ?> &
                        ci_cliente=<?php echo $mostrar['2'] ?> &
                        direccion=<?php echo $mostrar['3'] ?> &
                        fecha_cli=<?php echo $mostrar['4'] ?> 
                        ?"> EDITAR</a>
                        <a href="sp_eliminarCli.php ? id_cliente=<?php echo $mostrar['0'] ?>"> ELIMINAR</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    </div>
</body>
</html>