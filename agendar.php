<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $data = $_POST["data"];
    $horario = $_POST["horario"];
    $especialidade = $_POST["especialidade"];
    $obs = $_POST["obs"];

    // Formata os dados para armazenamento em arquivo
    $agendamento = "$data,$horario,$especialidade,$obs\n";

    // Abre o arquivo para escrita (ou cria, se não existir)
    $file = fopen("agendamentos.txt", "a");

    // Escreve os dados do agendamento no arquivo
    fwrite($file, $agendamento);

    // Fecha o arquivo
    fclose($file);

    // Redireciona de volta para a página de agendamento com uma mensagem de sucesso
    header("Location: agendar.php?success=true");
    exit();
}
?>
