<?php
session_start();

if(!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit;
}

$clientes = isset($_SESSION['clientes']) ? $_SESSION['clientes'] : array();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Clientes</title>
</head>
<body>
    <h2>Clientes Cadastrados</h2>
    <ul>
        <?php foreach($clientes as $cliente): ?>
        <li>
            Nome: <?php echo $cliente['nome']; ?><br>
            Telefone: <?php echo $cliente['telefone']; ?><br>
            Email: <?php echo $cliente['email']; ?><br>
        </li>
        <?php endforeach; ?>
    </ul>
    <a href="cadastro.php">Cadastrar novo cliente</a><br>
    <a href="index.php">Logout</a>
</body>
</html>
