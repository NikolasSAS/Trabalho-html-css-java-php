

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>painel</title>
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

<div class="echo">
<?php 
include 'Conect.php';

$nome= $_POST['Login'];
$senha= $_POST['Senha'];

// Query para verificar se o usuário existe
$sql = "SELECT * FROM usuarios WHERE nome = '$nome' AND senha = '$senha'";
$result = $conn->query($sql);

// Verifica se há resultados
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "Nome: " . $row["nome"] . "<br>";
    echo "Email: " . $row["email"] . "<br>";
    echo "ID: " . $row["userID"] . "<br><br>";
} else {
    header("Location: Trab-logar erro.php");
}

$conn->close();
?>


Bem vindo <?php echo $nome ?>
</div>

<br>

<a href="Trab-remover.php" class="Delete">
<button type="button" style="font-size: 20px;">Deletar Conta</button>
</a>

<style>
    .echo{
        font-size: 26px;
        padding: 10px;
    }

    .Delete{
        justify-content: left;
        padding: 10px;
        border-radius: 5px;
    }
</style>
</body>
</html>