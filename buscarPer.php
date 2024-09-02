<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="personal.css">
    <title>Document</title>
</head>
<body>
    <div class="formulario">
        <form action="buscarPer.php" method="post">
            <input type="text" value="buscar" id="">
            <input type="submit" value="Buscar">
            <a href="agregarPer.php">Agregar</a>
        </form>
    </div>

    <div>
        <table border="1">
            <tr>
                <td>ID PERSONA</td>
                <td>NOMBRE</td>
                <td>APELLIDO</td>
                <td>CONTACTO</td>
                <td>DIRECCION</td>
                <td>CI</td>
                <td>CARGO</td>
                <td>CONTRASEÑA</td>
                <td>OPCIONES</td>
            </tr>
            <?php
                $buscar=$_POST['buscar'];
                $cnx = mysqli_connect("localhost","root","SerCu05/M20.","CAFETERIA");
                $sql = "SELECT ID_EMP,NOMBRE_EMP,APELLIDO,CONTACTO,DIRECCION,CI,CARGO,CONTRASEÑA FROM PERSONAL WHERE NOMBRE_EMP like '$buscar%' ORDER BY ID_EMP ASC";
                $rta = mysqli_query($cnx, $sql);
                while($mostrar = mysqli_fetch_row($rta)){
                ?>
                <tr>
                    <td><?php echo $mostrar['0'] ?></td>
                    <td><?php echo $mostrar['1'] ?></td>
                    <td><?php echo $mostrar['2'] ?></td>
                    <td><?php echo $mostrar['3'] ?></td>
                    <td><?php echo $mostrar['4'] ?></td>
                    <td><?php echo $mostrar['5'] ?></td>
                    <td><?php echo $mostrar['6'] ?></td>
                    <td><?php echo $mostrar['7'] ?></td>
                    <td> 
                        <a href="editarPer.php? 
                        id_emp=<?php echo $mostrar['0'] ?> &
                        nombre_emp=<?php echo $mostrar['1'] ?> &
                        apellido=<?php echo $mostrar['2'] ?> &
                        contacto=<?php echo $mostrar['3'] ?> &
                        direccion=<?php echo $mostrar['4'] ?> &
                        ci=<?php echo $mostrar['5'] ?> &
                        cargo=<?php echo $mostrar['6'] ?> &
                        contraseña=<?php echo $mostrar['7'] ?> 
                        ?"> EDITAR</a>
                        <a href="sp_eliminarPer.php ? id_emp=<?php echo $mostrar['0'] ?>"> ELIMINAR</a>
                    </td>
                </tr>
                <?php
                }
                ?>
        </table>
    </div>
</body>
</html>