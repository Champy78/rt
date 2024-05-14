<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Verifica se o usuário e senha correspondem
    // Aqui você deve implementar a lógica de autenticação adequada

    // Redireciona o usuário para a página de perfil se o login for bem-sucedido
    // Caso contrário, exibe uma mensagem de erro
    if ($authentication_successful) {
        header("Location: profile.php");
        exit();
    } else {
        echo "Usuário ou senha incorretos.";
    }
}
?>
