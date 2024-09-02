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
        <div>
        <?php include("nav.php")?>
        </div>
        <h1 class="text-center text-dark p-4" >GESTION DE EMPLEADOS</h1>

        <style>
            .close{
                margin-left:1450px;
                margin-top:-130px;
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
        include("modificar_emp.php");
        include("eliminar_emp.php");
        include("limpiar.php");
        ?>
    <div class="row col-12 p-4">
        <form action="" method="post" class="col p-3">

                <div>

                <?php 
            include("conexion.php");
            include("insertar_Personal.php"); ?>
                    <div class="mb-3">
                    <label class="form-label txtmine">Nombre personal</label>
                    <input type="text" class="form-control" name="nombreper">
                    </div>
                    <div class="mb-3">
                    <label class="form-label txtmine">PELLIDO</label>
                    <input type="text" class="form-control" name="apper">
                    </div>
                    <div class="mb-3">
                    <label class="form-label txtmine">Contacto</label>
                    <input type="number" class="form-control" name="contacto">
                    </div>
                    <div class="mb-3">
                    <label class="form-label txtmine">Direccion</label>
                    <input type="text" class="form-control" name="dirper">
                    </div>
                    <div class="mb-3">
                    <label class="form-label txtmine">CI</label>
                    <input type="number" class="form-control" name="ciper">
                    </div>
                    <div class="mb-3">
                    <label class="form-label txtmine">CARGO</label>
                    <input type="text" class="form-control" name="cargo">
                    </div>
                    <div class="mb-3">
                    <label class="form-label txtmine">CONTRASEÑA</label>
                    <input type="text" class="form-control" name="contraseña">
                    </div>

                    <div class="text-center mb-2">
                    <!--<a href="orden.php?idt='0'" class="btn btn-primary"><i class="fas fa-eraser"></i></a>
                    <a href="insertar-factura.php" class="btn btn-success"><i class="fas fa-user"></i></a>-->
                    <button type="submit" name="insertarPer" value="OK" class="btn btn-dark">Anadir</button>
                    </div>

                    <?php 
                    include("conexion.php");
                    $pedido=$cnx->query("SELECT ID_TEM,PRODUCTO,MENSAJE,CANTIDAD,PRECIO,TOTAL FROM DETALLE_TEM");
                    $datos=$pedido->fetch_object()?>
                    
                </div>
        </form>

        <table class="table col p-3">
            <thead>
                <tr class="table-dark">
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">APELLIDO</th>
                <th scope="col">CONTACTO</th>
                <th scope="col">DIRECCION</th>
                <th scope="col">CI</th>
                <th scope="col">CARGO</th>
                <th scope="col">CONTRASEÑA</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                include("conexion.php");
                $factura=$cnx->query("SELECT ID_EMP,NOMBRE_EMP,APELLIDO,CONTACTO,DIRECCION,CI,CARGO,CONTRASEÑA FROM PERSONAL");

                while($datos=$factura->fetch_object()){ ?>
                <tr>
                    <td><?= $datos->ID_EMP?></td>
                    <td><?= $datos->NOMBRE_EMP?></td>
                    <td><?= $datos->APELLIDO?></td>
                    <td><?= $datos->CONTACTO?></td>
                    <td><?= $datos->DIRECCION?></td>
                    <td><?= $datos->CI?></td>
                    <td><?= $datos->CARGO?></td>
                    <td><?= $datos->CONTRASEÑA?></td>
                    <td><a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $datos->ID_EMP?>"><i class="fas fa-edit"></i></a></td>
                    <td><a href="per.php?id=<?= $datos->ID_EMP?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>

                    <!-- Modal -->
                <div class="modal fade" id="exampleModal<?= $datos->ID_EMP?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                                    <input type="text" value="<?= $datos->ID_EMP?>" name="idemp">

                                    <div class="mb-3">
                                    <label class="form-label txtmine">Nombre personal</label>
                                    <input type="text" class="form-control" name="nombreper" value="<?= $datos->NOMBRE_EMP?>">
                                    </div>
                                    <div class="mb-3">
                                    <label class="form-label txtmine">PELLIDO</label>
                                    <input type="text" class="form-control" name="apper" value="<?= $datos->APELLIDO?>">
                                    </div>
                                    <div class="mb-3">
                                    <label class="form-label txtmine">Contacto</label>
                                    <input type="number" class="form-control" name="contacto" value="<?= $datos->CONTACTO?>">
                                    </div>
                                    <div class="mb-3">
                                    <label class="form-label txtmine">Direccion</label>
                                    <input type="text" class="form-control" name="dirper" value="<?= $datos->DIRECCION?>">
                                    </div>
                                    <div class="mb-3">
                                    <label class="form-label txtmine">CI</label>
                                    <input type="number" class="form-control" name="ciper" value="<?= $datos->CI?>">
                                    </div>
                                    <div class="mb-3">
                                    <label class="form-label txtmine">CARGO</label>
                                    <input type="text" class="form-control" name="cargo" value="<?= $datos->CARGO?>">
                                    </div>
                                    <div class="mb-3">
                                    <label class="form-label txtmine">CONTRASEÑA</label>
                                    <input type="text" class="form-control" name="contraseña" value="<?= $datos->CONTRASEÑA?>">
                                    </div>
                                    <div class="text-right mb-2">
                                    <!--<a href="orden.php?idt='0'" class="btn btn-primary"><i class="fas fa-eraser"></i></a>
                                    <a href="insertar-factura.php" class="btn btn-success"><i class="fas fa-user"></i></a>
                                    <button type="submit" name="insertar" value="OK" class="btn btn-primary">
                                        <a href="orden.php?idt='0'" class="btn btn-primary"><i class="fas fa-eraser"></i></a>
                                    <a href="fpdf/informe.php" target="_blank" class="btn btn-success"><i class="fas fa-file-pdf"></i></a></button>
                                    </div>-->

                                    <div class="mb-3">
                                    <button type="submit" name="modificarE" value="OK" class="btn btn-primary">Modificar</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </tbody>
        </table>
    </div>
        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="script.js"></script>
</body>
</html>