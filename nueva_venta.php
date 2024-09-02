<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="vent.css">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <section id="container">
        <div class="title_page">
            <h1><i class="fas fa-cube"></i>NUEVA VENTA</h1>
        </div>
        <div class="datos_cliente">
            <div class="action_cliente">
                <h4>Datos del Cliente</h4>
                <a href="#" class="btn_new btn_new_cliente"><i class="fas fa-plus"></i>Nuevo Cliente</a>
            </div>
            <form action="" name="form_new_cliente_venta" id="form_new_cliente_venta" class="datos">
                <input type="hidden" name="action" value="addCliente">
                <input type="hidden" id="idcliente" name="idcliente" value="" required>
                <div class="wd30">
                    <label>
                        <input type="text" name="nombre_cli" id="nombre_cli">
                    </label>
                </div>
                <div class="wd30">
                    <label>
                        <input type="number" name="ci_cliente" id="ci_cliente">
                    </label>
                </div>
                <div class="wd100">
                    <label>
                        <input type="text" name="direccion" id="direccion">
                    </label>
                </div>
                <div id="div_registro_cliente" class="wd100">
                    <button type="submit" class="btn_save"><i class="far fa-save fa-lg"></i>Guardar</button>
                </div>
            </form>
        </div>

        <div class="datos_venta">
            <h4>Datos de Venta</h4>
            <div class="wd50">
                <label>ACCIONES</label>
                <div id="acciones_venta">
                    <a href="#" class="btn_ok textcenter" id="btn_anular_venta"><i class="fa fa-ban"></i>Anular</a>
                    <a href="#" class="btn_new textcenter" id="btn_facturar_venta"><i class="fa fa-edit"></i>Procesar</a>
                </div>
            </div>
        </div>


        <table class="tbl_venta">
            <thead>
                <tr>
                    <th width="100px">Codigo</th>
                    <th>Descripcion</th>
                    <th>Existencia</th>
                    <th width="100px">Cantidad</th>
                    <th class="textright">Precio</th>
                    <th class="textright">Precio Total</th>
                    <th>Accion</th>
                </tr>
                <tr>
                    <td><input type="text" name="txt_cod_producto" id="txt_cod_producto"></td>
                    <td id="txt_descripcion">-</td>
                    <td id="txt_existencia">-</td>
                    <td><input type="text" name="txt_cant_producto" id="txt_cant_producto" value="0" min="1" disabled></td>
                    <td id="txt_precio" class="textright">0.00</td>
                    <td id="txt_precio_total" class="textright">0.00</td>
                    <td><a href="#" id="add_product_venta" class="link_add"><i class="fas fa-plus"></i></a>Agregar</td>
                </tr>
                <tr>
                    <th>Codigo</th>
                    <th colspan="2">Descripcion</th>
                    <th>Cantidad</th>
                    <th class="textright">Precio</th>
                    <th class="textright">Precio Total</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody id="detalle_venta">
                <tr>
                    <td>1</td>
                    <td colspan="2">Mouse</td>
                    <td class="textcenter">1</td>
                    <td class="textright">100.00</td>
                    <td class="textright">100.00</td>
                    <td class=""><a href="#" class="link_delete" onclick="event.preventDefault(); 
                    del_product_detalle(1);"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td colspan="2">USB</td>
                    <td class="textcenter">1</td>
                    <td class="textright">150.00</td>
                    <td class="textright">1500.00</td>
                    <td class=""><a href="#" class="link_delete" onclick="event.preventDefault(); 
                    del_product_detalle(1);"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
                <tfoot>
                    <tr>
                        <td colspan="5" class="textright">SUBTOTAL Q.</td>
                        <td class="textright">88.00</td>
                    </tr>
                    <tr>
                        <td colspan="5" class="textright">IV 12%</td>
                        <td class="textright">500</td>
                    </tr>
                    <tr>
                        <td colspan="5" class="textright">TOTAL Q.</td>
                        <td class="textright">1000</td>
                    </tr>
                </tfoot>
            </tbody>
        </table>
    </section>

    <script src="funciones.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>