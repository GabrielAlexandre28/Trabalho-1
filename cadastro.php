<?php
session_start();
if(!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit;
}

if(isset($_POST['nome']) && isset($_POST['telefone']) && isset($_POST['email'])) {
   
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    $cliente = array('nome' => $nome, 'telefone' => $telefone, 'email' => $email);

    $_SESSION['clientes'][] = $cliente;

    header('Location: clientes.php');
    exit;
}
?>

<html>

<head>
    <title>Cadastrar Cliente</title>
</head>

<body>

    <h2>Cadastro de Cliente</h2>

        <form action="" method="post">
            <label for="nome">Nome:</label><br>
            <input type="text" id="nome" name="nome" required><br>
            <label for="telefone">Telefone:</label><br>
            <input type="text" id="telefone" name="telefone" required><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>
            <input type="submit" value="Cadastrar">
        </form>
</body>

</html>