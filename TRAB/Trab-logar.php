<?php 
include('Conect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/Icons8-Windows-8-Ecommerce-Shopping-Cart.512.png" type="image/x-icon">
</head>
<body>

 <div class="header">
    <div class="iner_header">
        <a href="Trab.html" class="logo_container">
            <h1>LOJA<span>\\ONLINE</span></h1>
        </a>
        <ul class="navigation">
            <a href="Trab-carrinho (funcional).html"><li>Carrinho</li></a>
            <a href="Trab-usuario.html"><li>Usuário</li></a>
        </ul>
    </div>
 </div>

 <br><br>

  <div class="Titulos">
   <h1>Entrar</h1>
  </div>
  
  <div class="formularios">
    <form action="painel.php" action="remover_usuario.php" method="post">
        <label for="Login">Login:</label><br>
        <input type="text" id="Login" name="Login" placeholder="Nome"><br>
        <label for="Senha">Senha:</label><br>
        <input type="password" id="Senha" name="Senha" placeholder="Senha"><br><br>
        <input type="submit" value="Submit">
    </form> 

    <style>
        .Titulos{
            padding-left: 12px;
            display: flex;
            justify-content: center;
            padding-bottom: 5px;
        }
    
        .formularios{
            text-align: center;
            display: flex;
            justify-content: center;
            border: 1px solid black;
            margin-left: 820px;
            margin-right: 820px;
            border-radius: 5px;
            box-shadow: 2px 2px 2px black;
        }
    </style>

</body>
</html>