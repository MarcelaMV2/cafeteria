<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <style>
        *{
            padding:0;
            margin:0;
            box-sizing:border-box;
            list-style:none;
            border: none;
            outline: none;
        }
        body{
            min-height: 100vh;
            width:100%;
            display:flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(-180deg, #BF9B75, #BF9B75);
        }
        .content{
            background-color: rgba(0, 0, 0, 0.5);
            width: 410px;
            border: 2px solid rgba(255,255,255, .2);
            backdrop-filter: blur(24px);
            color: #fff;
            border-radius:12px;
            padding:30px 35px;
        }
        .content h2{
            font-size: 38px;
            font-weight: 700px;
            text-align:center;
        }

        .input-box{
            position:relative;
            width: 100%;
            height: 55px;
            margin:30px 0;
        }
        .input-box input{
            background: transparent;
            width: 100%;
            height:100%;
            border: 2px solid rgba(255,255,255, .2);
            border-radius:30px;
            font-size:16px;
            color: #fff;
            padding: 20px 45px 20px 20px;
        }
        input::placeholder{
            color:#fff;
        }

        .input-box i{
            position:absolute;
            right: 18px;
            top: 50%;
            transform: translate(-50%);
            font-size:18px;
        }
        .remember{
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 15px;
            margin: -16px 0 16px;
        }
        .remember label input{
            accent-color:#fff;
            margin-right:4px;
        }
        .remember a{
            color:#fff;
        }
        .remember a:hover{
            text-decoration: underline;
        }
        .btnn{
            display: inline-block;
            background: #fff;
            color: #000;
            width:100%;
            border-radius: 30px;
            font-size:16px;
            height:45px;
            font-weight:600;
            box-shadow: 0 0 5px rgba(0,0,0, .1);
            cursor: pointer;
            margin-bottom: 30px;
        }
    </style>
    
    <div class="content">
        <form action="" method="post" class="signin-form">
            <h2>LOGIN ADMINISTRADOR</h2>
            <?php 
                include("conexion.php");
                include("controladm.php");
            ?>
            <div class="input-box">
                    <i class="fas fa-user"></i>
                        <input id="usuario" type="text" class="input" name="usuario" placeholder="Username">
                </div>
                <div class="input-box">
                    <i class="fas fa-lock"></i>
                        <input type="password" id="input" class="input" name="password" placeholder="Password">
                </div>
                <div class="remember">  
                    <label for=""><input type="checkbox">REMEMBER</label>
                <a href="#" class="forgot-password">¿Olvidaste tu Contraseña?</a>
                </div>
                <input type="submit" name="btningresar" value="Login" class="btnn">
        </form>
    </div>
</body>
</html>