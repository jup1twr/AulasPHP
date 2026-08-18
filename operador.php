<?php // inicia o script PHP

    $txt1 = "Aula"; // Atribui a string "Aula" à variável $txt1
    $txt2 = "PHP"; // Atribui a string "PHP" à variável $txt2
    echo $txt1 . " de " . $txt2 . "<br>"; // Exibe a concatenação das variáveis $txt1 e $txt2 com a string " de " no meio (Aula de PHP)

    $a = 10; // Atribui o valor 10 à variável $a
    $b = 3; // Atribui o valor 3 à variável $b
    echo $a + $b . "<br>"; // Exibe a soma das variáveis $a e $b
    echo $a % $b . "<br>"; // Exibe o resto da divisão das variáveis $a e $b

    $x = 5; // Atribui o valor 5 à variável $x
    echo $x++ . "<br>"; // auto-incremento, ++$a (pré) ou $a++ (pós)
    echo $x . "<br>"; // Exibe o valor da variável $x após o incremento

    $y = 5; // Atribui o valor 5 à variável $y
    echo $y-- . "<br>"; // auto-decremento, --$a (pré), $a-- (pós)
    echo $y . "<br>"; // Exibe o valor da variável $y após o decremento
    
?>