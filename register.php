<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_username = $_POST["new_username"];
    $new_password = $_POST["new_password"];

    // Adiciona o novo usuário ao arquivo de usuários
    $file = fopen("users.txt", "a");
    fwrite($file, $new_username . ":" . $new_password . "\n");
    fclose($file);

    // Redireciona o usuário para a página de login após o registro bem-sucedido
    header("Location: index.html");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["user_name"];
    $email = $_POST["email"];
    $senha = $_POST["password"];
    $confirmarSenha = $_POST["confirmarSenha"];
    $cep = $_POST["cep"];
    $estado = $_POST["estado"];
    $municipio = $_POST["municipio"];
    $logradouro = $_POST["logradouro"];
    $numero = $_POST["numero"];
    $bairro = $_POST["bairro"];
    $telefone = $_POST["telefone"];
    $data_nascimento = $_POST["data_nascimento"];
    $sexo = $_POST["sexo"];

    // Validação básica dos campos (pode ser expandida conforme necessário)
    if (empty($nome) || empty($email) || empty($senha) || empty($confirmarSenha)) {
        echo "Todos os campos são obrigatórios.";
        exit();
    }

    if ($senha !== $confirmarSenha) {
        echo "As senhas não coincidem.";
        exit();
    }

    // Adiciona os dados do usuário ao arquivo de usuários
    $file = fopen("users.txt", "a");
    fwrite($file, "$nome:$email:$senha:$cep:$estado:$municipio:$logradouro:$numero:$bairro:$telefone:$data_nascimento:$sexo\n");
    fclose($file);

    // Redireciona o usuário para a página de login após o registro bem-sucedido
    header("Location: login.html");
    exit();
}


?>
