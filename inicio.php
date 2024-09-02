<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <style>
    body{
        background: linear-gradient(-180deg, #BF9B75, #BF9B75);
        height:auto;
    }
    .tit{
        margin-top:100px;
        color:BLACK;
        text-align:center;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 4rem;
    }
    .bloque{
        text-align:center;
        padding-bottom:40px;
        margin-bottom:300px;
    }
    .inicioblo{
        display:inline-block;
        background-color: #000;
        text-align:center;
        padding:10px;
        width:160px;
        height:80px;
        margin-top:120px;
        padding-top:20px;
        padding-bottom:20px;
        margin-left:28px;
        border-radius:10px;
        font-size: 1rem;
        gap: 20px;
        box-shadow: 0px 1px 10px rgba(0,0, 0, 0.2);
    }
.inicioblo:hover{
    box-shadow: 5px 5px 5px rgba(0,0, 0, 0.4);
    transform: translateY(-5%);
}

    .inicioblo i{
        font-size: 3em;
        color:WHITE;
    }
    .icon{
        margin-top:10px;
        display:block;
        text-decoration:none;
        font-family: 'poppins', sans-serif;
        color:WHITE;
        font-weight: bold;
    }
    </style>
    <h2 class="tit">SISTEMA DE UNA CAFETERIA</h2>
    <div class="bloque">
    <div class="inicioblo">
    <i class="fa-solid fa-user"></i>
    <a href="loginadm.php" class="icon" name="adm">ADMINISTRADOR</a>
    </div>
    <div class="inicioblo">
    <i class="fa-solid fa-users"></i>
    <a href="logincajero.php" class="icon" name="user">USUARIOS</a>
    </div>
    </div>

</body>
</html>