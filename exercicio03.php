<?php

    $setorAcesso = "Estoque"; // único setor que tem acesso é o setor de Estoque.
    $nomeFunc = $_GET['Nome'] ?? 'Visitante'; // ?? serve para estabelecer um padrão caso não receba nenhum valor.
    $cracha = true; // true como padrão

    $acesso = ($setorAcesso === "Estoque" && $cracha === true);

    $mensagem = $acesso ? "<b> Porta destravada!</b> Acesso autorizado." : "Acesso negado! <b> Porta travada. </b>";

    echo "Olá, $nomeFunc! <br>";
    echo $mensagem;
?>