<?php
    $nota = 5.1;
    $frequencia = 76;

    if ($frequencia < 75){
       $msg = ' Reprovado por falta <br>';
    } elseif ($nota >= 7.0){
        echo ' Aprovado <br>';
    } elseif ($nota <= 6.9 && $nota >= 5.0){
        $msg = ' Em recuperação <br>';
    } else {
        $msg = ' Reprovado por Nota <br>';
    }

echo "A nota do aluno foi " . $nota . " pontos <br>";
echo "A frequência do aluno foi de " . $frequencia . "% <br>";
echo "O resultado do aluno é " . $msg . "<br>";

?>