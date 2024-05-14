<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Consultar Agendas</title>
</head>
<body>

<div id="topo">
    <div id="menu">
        <img src="imagens/imagem1.jpg">
        <a href="home.php">Clínica O Sheik</a>
        <a href="quem_somos.php">Quem Somos</a>
        <a href="especialidade.php">Especialidade</a>
        <a href="contato.php">Contato</a>
        <a href="ajuda.php">Ajuda</a>
    </div>
</div>

<div class="container3">
    <h1>Consultar Agendas</h1>
    
    <table border="1">
        <thead>
            <tr>
                <th>Data</th>
                <th>Horário</th>
                <th>Especialidade</th>
                <th>Observações</th>
            </tr>
        </thead>
        
        <tbody>
            <?php
            // Lê os dados do arquivo agendamentos.txt e exibe na tabela
            $file = fopen("agendamentos.txt", "r");
            if ($file) {
                while (($line = fgets($file)) !== false) {
                    $data = explode(",", $line);
                    echo "<tr>";
                    echo "<td>$data[0]</td>";
                    echo "<td>$data[1]</td>";
                    echo "<td>$data[2]</td>";
                    echo "<td>$data[3]</td>";
                    echo "</tr>";
                }
                fclose($file);
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>
