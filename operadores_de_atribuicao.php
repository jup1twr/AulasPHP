<?php
    $pontos = 10;
    $pontos += 5; // adiciona o valor 5 à variável $pontos

    $mensagem = "oi,";
    $mensagem .= " Aluno";

    $nome = $_GET['nome'] ?? 'Visitante';

    echo $pontos . "<br>";
    echo $mensagem . "<br>";
    echo $nome . "<br>";
?>