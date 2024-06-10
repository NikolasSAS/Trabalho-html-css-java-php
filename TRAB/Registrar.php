<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrar</title>
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

 <br>

<div class="php">
  <?php

include 'Conect.php';

// Receber os dados do formulário
$nome = $_POST['Nome'];
$email = $_POST['Email'];
$senha = $_POST['Senha2'];
$senha2 = $_POST['Senha3'];

if ($senha === $senha2){

 // Função para verificar se o usuário já existe no banco de dados
 function usuarioExiste($conn, $nome) {
  $sql = "SELECT * FROM usuarios WHERE nome = '$nome'";
  $result = $conn->query($sql);
  return $result->num_rows > 0;
 }

 if (usuarioExiste($conn, $nome)) {
  echo "Este nome de usuário já está em uso.";
 } else {

 // Inserir os dados no banco de dados
 $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

 if ($conn->query($sql) === TRUE) {
    echo "Usuário cadastrado com sucesso!";
 } else {
    echo "Erro ao cadastrar usuário: " . $conn->error;
 }

 }

} else{
  header("Location: Trab-registrar erro.php");
 }

$conn->close();
?>
</div>

<style>
  .php{
    font-size: 20px;
    padding: 10px;
    display: flex;
    justify-content: center;
  }

</style>
</body>
</html>



