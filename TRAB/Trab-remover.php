<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remover</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/Icons8-Windows-8-Ecommerce-Shopping-Cart.512.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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

  <div class="Titulos">
   <h1>Remover</h1>
  </div>

    <div class="formularios">
    <form action="remover_usuario.php" method="post"><br>
        <label for="ID">Digite o ID do usuário a ser removido:</label><br>
        <input type="text" id="ID" name="ID" placeholder="ID"><br><br> 
        <label for="nome">Digite o Nome do usuário a ser removido: </label><br>
        <input type="text" id="nome" name="nome" placeholder="nome"><br><br>
        <label for="senha">Digite a Senha do usuário a ser removido:</label><br>
        <input type="password" id="senha" name="senha" placeholder="senha"><br><br>
        <input type="submit" value="Submit">
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
            margin-left: 780px;
            margin-right: 780px;
            border-radius: 5px;
            box-shadow: 2px 2px 2px black;
        }
    </style>


</body>
</html>