<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o e-mail foi enviado
    if (isset($_POST["email"])) {
        $email = $_POST["email"];

        // Aqui você pode adicionar a lógica para verificar se o e-mail existe no seu sistema
        // Se o e-mail existir, você pode gerar um link único para redefinir a senha e enviar um e-mail para o usuário com esse link
        // Se o e-mail não existir, você pode exibir uma mensagem de erro informando que o e-mail não foi encontrado

        // Exemplo de envio de e-mail (substitua com sua lógica de envio de e-mail real)
        $to = $email;
        $subject = "Recuperação de Senha";
        $message = "Olá! Clique no link a seguir para redefinir sua senha: http://seusite.com/redefinir_senha.php?email=$email";
        $headers = "From: seuemail@seusite.com";

        if (mail($to, $subject, $message, $headers)) {
            echo "Um e-mail de recuperação de senha foi enviado para $email. Por favor, verifique sua caixa de entrada.";
        } else {
            echo "Ocorreu um erro ao enviar o e-mail. Por favor, tente novamente mais tarde.";
        }
    } else {
        echo "Por favor, forneça um endereço de e-mail válido.";
    }
}
?>
