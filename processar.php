<?php

    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $loja = htmlspecialchars($_POST['loja']);
        $chave = htmlspecialchars($_POST['chave']);

        echo "<h1>Dados Recebidos</h1>";
        echo "<p><strong>LOJA:</strong> $loja</p>";
        echo "<p><strong>CHAVE</strong> $chave</p>";

        $nomeArquivo = "dados.txt";

        $conteudo = $chave;

        $arquivo = fopen($nomeArquivo, "a");

        if ($arquivo) {
            fwrite($arquivo, $conteudo);
            
            fclose($arquivo);
            
            echo "Dados gravados com sucesso em '$nomeArquivo'!";
        } else {
            echo "Erro: Não foi possível abrir ou criar o arquivo.";
        }

    }else {
        echo "<p>Erro: O formulário deve ser enviado corretamente.</p>";
    }

?>