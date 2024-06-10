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

 <?php 
 // $sql = 'CREATE TABLE IF NOT EXISTS usuarios (userID	int(11) PRIMARY KEY, nome varchar(120), email varchar(120), senha varchar(120))
 ?>

  <div class="Titulos">
   <h1>Cadastrar</h1>
  </div>
  
   <div class="formularios">
    <form action="Registrar.php" method="post">
        <label for="Nome">Nome de Usuario:</label><br>
        <input type="text" id="Nome" name="Nome" placeholder="Nome"><br>
        <label for="Email">Email:</label><br>
        <input type="text" id="Email" name="Email" placeholder="Email"><br>
        <label for="Senha2">Senha:</label><br>
        <input type="password" id="Senha2" name="Senha2" placeholder="Senha"><br>
        <label for="Senha3">Confirmar Senha:</label><br>
        <input type="password" id="Senha3" name="Senha3" placeholder="Senha"><br><br>
        <input type="Submit" value="Submit">
    </form> 
   </div>


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