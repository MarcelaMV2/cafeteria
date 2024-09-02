<?php 
if(!empty($_POST["btningresar"])){/******andamos consultado que no este vacia con esta linea de codigo */
    if(empty($_POST["usuario"]) and empty($_POST["password"])){
        echo '<div class="alert alert-danger">LOS CAMPOS ESTAN VACIOS</div>';
    } else {
        $usuario=$_POST["usuario"];
        $clave=$_POST["password"];
        $sql=$cnx->query("select * from personal where nombre_emp='$usuario' and CONTRASEÑA='$clave'");/**si el usuario existe nos traera los datos*/
        if($datos=$sql->fetch_object()){/*si existe lo redireccionamos*/
            header("location:admin.php");
        } else {
            echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';
        }
    }
}
?>