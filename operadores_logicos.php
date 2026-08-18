<?php
    $ativo =true; $bloqueado = false; $texto ="10.5";

    echo ($ativo && $bloqueado ? 'V' : 'F') . "<br>"; // && =AND, retorna true se ambos forem verdadeiros
    echo ($ativo || $bloqueado ? 'V' : 'F') . "<br>"; // || = OR, retorna true se pelo menos um for verdadeiro
    echo (!$ativo ? 'V' : 'F') . "<br>"; // ? é o if else em uma linha, sendo que o valor da esquerda é o resultado se for verdadeiro e o da direita se for falso
    echo (($ativo xor $bloqueado) ? 'V' : 'F') . "<br>"; // EXCLUSIVE (XOR), retorna true mesmo se apenas um for verdadeiro

    echo (int) $texto . "<br>"; // conversão de tipo, converte a string "10.5" para inteiro (10)
    echo (float) $texto . "<br>"; 

    $x1 = true;
    $x2 = "25.8";
    $x3 = false;
    $x4 = true;

    echo ($x1 && $x3 ? "V":"F") . " - 1 AND 0 <br>";
    echo ($x1 || $x3 ? "V":"F") . " - 1 OR 0 <br>";
    echo ($x1 ? "V":"F") . " - 1 <br>";
    echo (!$x1 ? "V":"F") . " - NOT(1) <br>";

    echo (($x1 xor $x3) ? "V":"F") . " - 1 xor 0 <br>";
    echo (($x1 xor $x4) ? "V":"F") . " - 1 xor 1 <br>";

    echo gettype($x2) . ' - $x2 = "25.8" <br>';
    echo gettype((int) $x2) . ' - $x2 = "25.8" <br>';
    echo (int) $x2 . ' - (int) $x2 = "25.8" <br>';

    echo gettype((float) $x2) . ' - $x2 = "25.8" <br>';
    echo (float) $x2 . ' - (float) $x2 = "25.8" <br>';
?>