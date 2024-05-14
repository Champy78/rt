<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter os dados do formulário
    $user_data = array(
        "nome" => $_POST["user_name"],
        "email" => $_POST["email"],
        "senha" => $_POST["password"],
        "confirmar_senha" => $_POST["confirmarSenha"],
        // Adicione aqui os outros campos do formulário
    );

    // Validação básica dos campos (pode ser expandida conforme necessário)
    if (empty($user_data['nome']) || empty($user_data['email']) || empty($user_data['senha']) || empty($user_data['confirmar_senha'])) {
        echo "Todos os campos são obrigatórios.";
        exit();
    }

    if ($user_data['senha'] !== $user_data['confirmar_senha']) {
        echo "As senhas não coincidem.";
        exit();
    }

    // Armazenar os dados do usuário em um arquivo CSV
    $file = fopen("users.csv", "a");
    fputcsv($file, $user_data);
    fclose($file);

    // Redirecionar o usuário para a página de login após o registro bem-sucedido
    header("Location: login.html");
    exit();
}
?>


