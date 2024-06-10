<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Removido</title>
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

<div class="echo">
    <?php
        include 'Conect.php';
       
        // Preparar e executar a declaração SQL para remover o usuário da tabela 
        $user_id = $_POST["ID"];
        $user_name = $_POST["nome"];
        $user_senha = $_POST["senha"];
        $sql = "DELETE FROM usuarios WHERE userID = '$user_id' AND nome = '$user_name' AND senha = '$user_senha'";
        $result = $conn->query($sql);

        if ($conn->query($sql) === TRUE) {
            echo "Usuário removido com sucesso.";
        } else {
            echo "Erro ao remover usuário: " . $conn->error;
        }

        $conn->close();
?>
</div>

<style>
    .echo{
    font-size: 20px;
    padding: 10px;
    display: flex;
    justify-content: center;
    }
</style>

</body>
</html>
