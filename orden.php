<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8f04962f1c.js" crossorigin="anonymous"></script>
</head>
<body class="custom-bg">


        <h1 class="text-center text-dark p-2" >SISTEMA DE PEDIDOS</h1>

        <style>
            .close{
                margin-left:1450px;
                margin-top:-90px;
                font-size:35px;
            }
            .fa-window-close{
                font-size:40px;
            }

        </style>

        <a href="inicio.php" class="btn btn-dark close"><i class="far fa-window-close"></i></a>

        <?php
        include("conexion.php");
        include("controlador_modificar_detalle.php");
        include("controlador_eliminar_detalle.php");
        include("limpiar.php");
        ?>
    <div class="row col-12 p-4">
    <form action="" method="post" class="col p-3">
        <h4 class="text-center text-dark">REGISTRO DE ORDEN</h4>
        <?php 
        include("conexion.php");
        include("controlador_detalle.php"); ?>

        <?php
        include("conexion.php");
        $productos = $cnx->query("SELECT ID_PROD,NOMBRE_PROD FROM PRODUCTO");
        ?>

        <div class="mb-3">
        <label class="form-label txtmine" for="producto">Categoria</label>
        <select class="form-select" aria-label="Default select example" name="producto" id="producto">
            <option selected>Seleccionar..</option>
            <?php while($row = $productos->fetch_assoc()) { ?>
                <option value="<?php echo $row['ID_PROD'];?>"><?php echo $row['NOMBRE_PROD'];?></option>
            <?php }?>
        </select>
        </div>

        <div class="mb-3">
        <label class="form-label txtmine" for="subcategoria">Subactegoria</label>
        <select class="form-select" aria-label="Default select example" name="subcategoria" id="subcategoria">
            <option value="">Seleccionar..</option>
        </select>
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label txtmine">Comentarios</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="comentario">
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label txtmine">Precio</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" name="precio" step="1">
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label txtmine">Cantidad</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" name="cantidad" step="1">
        </div>

        <div class="mb-3 text-center">
        <button type="submit" name="anadir" value="OK" class="btn btn-dark"><i class="fa-solid fa-plus"></i></button>
        </div>

    </form>

    <table class="table col p-3">
        <thead>
            <tr class="table-dark">
            <th scope="col">PRODUCTO</th>
            <th scope="col">COMENTARIOS</th>
            <th scope="col">CANTIDAD</th>
            <th scope="col">PRECIO</th>
            <th scope="col">TOTAL</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include("conexion.php");
            $pedido=$cnx->query("SELECT ID_TEM,PRODUCTO,MENSAJE,CANTIDAD,PRECIO,TOTAL FROM DETALLE_TEM");

            $costoTotal=0;
            while($datos=$pedido->fetch_object()){ ?>
               <tr>
                <td><?= $datos->PRODUCTO?></td>
                <td><?= $datos->MENSAJE?></td>
                <td><?= $datos->CANTIDAD?></td>
                <td><?= $datos->PRECIO?></td>
                <td><?= $datos->TOTAL?></td>
                <td><a href="orden.php?id=<?= $datos->ID_TEM?>" class="btn btn-danger"><i class="fa-solid fa-x"></i></a></td>
                </tr>

                <?php 
                $costoTotal += floatval($datos->TOTAL);
                ?>

                <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body">
            <form action="" method="post" class="col">
                <h4 class="text-center text-dark">REGISTRO DE ORDEN</h4>
                <?php
                include("conexion.php");
                $productos = $cnx->query("SELECT ID_PROD,NOMBRE_PROD FROM PRODUCTO");
                ?>

                <input type="text" value="<?= $datos->ID_TEM?>" name="idTem">

                <div class="mb-3">
                <label class="form-label" for="producto">Categoria</label>
                <select class="form-select" aria-label="Default select example" name="producto" id="producto">
                    <option selected>Seleccionar..</option>
                    <?php while($row = $productos->fetch_assoc()) { ?>
                        <option value="<?php echo $row['ID_PROD'];?>"><?php echo $row['NOMBRE_PROD'];?></option>
                    <?php }?>
                </select>
                </div>

                <div class="mb-3">
                <label class="form-label" for="subcategoria">Subactegoria</label>
                <select class="form-select" aria-label="Default select example" name="subcategoria" id="subcategoria">
                    <option value="">Seleccionar..</option>
                </select>
                </div>

                <div class="mb-3">
                <label class="form-label">Comentarios</label>
                <input type="text" class="form-control" name="comentario" value="<?= $datos->MENSAJE?>">
                </div>

                <?php while($row = $productos->fetch_assoc()) { ?>
                        <option value="<?php echo $row['ID_PROD'];?>"><?php echo $row['NOMBRE_PROD'];?></option>
                    <?php }?>
                    
                <div class="mb-3">
                <label class="form-label">Precio</label>
                <input type="number" class="form-control" name="precio" step="1"  value="<?= $datos->PRECIO?>">
                </div>

                <div class="mb-3">
                <label class="form-label">Cantidad</label>
                <input type="number" class="form-control" name="cantidad" step="1"  value="<?= $datos->CANTIDAD?>">
                </div>

                <div class="mb-3">
                <button type="submit" name="modificar" value="OK" class="btn btn-dark">Modificar</button>
                </div>
            </form>

            </div>
            </div>
        </div>
        </div>
            <?php }?>
        </tbody>
    </table>
        <form action="" method="post">

            <div>

            <?php 
        include("conexion.php");
        include("insertar_factura.php"); ?>
                <div class="mb-3">
                <label class="form-label txtmine">COSTOTAL</label>
                <input type="number" class="form-control" name="costotal" value="<?= $costoTotal?>">
                </div>
                <div class="mb-3">
                <label class="form-label txtmine">Nombre Cliente</label>
                <input type="text" class="form-control" name="nombrecliente">
                </div>
                <div class="mb-3">
                <label class="form-label txtmine">CI Cliente</label>
                <input type="number" class="form-control" name="cicliente">
                </div>
                <div class="text-center mb-2">
                <?php 
                include("conexion.php");
                $pedido=$cnx->query("SELECT ID_TEM,PRODUCTO,MENSAJE,CANTIDAD,PRECIO,TOTAL FROM DETALLE_TEM");
                $datos=$pedido->fetch_object()?>
                <!--<a href="orden.php?idt='0'" class="btn btn-primary"><i class="fas fa-eraser"></i></a>
                <a href="insertar-factura.php" class="btn btn-success"><i class="fas fa-user"></i></a>-->
                <button type="submit" name="insertar" value="OK" class="btn btn-dark"><i class="fa-solid fa-user-plus"></i></button>
                <a href="orden.php?idt='0'" class="btn btn-dark"><i class="fas fa-eraser"></i></a>
                <a href="fpdf/informe.php" target="_blank" class="btn btn-success"><i class="fas fa-file-pdf"></i></a>
                </div>

               <!-- <?php 
                include("conexion.php");
                $pedido=$cnx->query("SELECT ID_TEM,PRODUCTO,MENSAJE,CANTIDAD,PRECIO,TOTAL FROM DETALLE_TEM");
                $datos=$pedido->fetch_object()?>
                
                <div class="text-center mb-2">
                <a href="orden.php?idt='0'" class="btn btn-dark"><i class="fas fa-eraser"></i></a>
                <a href="fpdf/informe.php" target="_blank" class="btn btn-success"><i class="fas fa-file-pdf"></i></a>
                </div>-->
            </div>
        </form>
    </div>
        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="script.js"></script>
</body>
</html>