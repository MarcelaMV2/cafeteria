<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="prueba.css">
    <title>Signup</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="signin">
            <form action="" method="post" class="signin-form">
                <h2 class="title">SIGN IN</h2>
                <?php 
                include("conexion.php");
                include("controlador.php");
                ?>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                        <input id="usuario" type="text" class="input" name="usuario" placeholder="Username">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                        <input type="password" id="input" class="input" name="password" placeholder="Password">
                </div>
                <input type="submit" name="btningresar" value="Login" class="bttn">
                <div class="forgot">
                    <a href="#" class="forgot-password">¿Olvidaste tu Contraseña?</a>
                </div>
            </form>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                
                <img src="img/cafe1.jpg" alt="" class="image">
            </div>
        </div>

    </div>
    
</body>
</html>