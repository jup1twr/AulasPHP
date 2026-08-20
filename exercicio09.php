<!DOCTYPE html>
<html lang ='pt-br'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Formulário</title>
    </head>
    <body>
        <h1>Formulário</h1>
        <form action='exercicio09.php' method='POST'> 
        <!-- method='POST': não aparece na URL 
        method='GET': aparece o name='nomeUsuario' e o que foi recebido na URL -->
            <label for='valSensor'>Valor do Sensor:</label>
            <input type="text" id='valSensor' name='valSensor' required>
                    <br><br>
            <input type='submit' value='Enviar'>
        </form>
    </body>
</html>


<?php
    $leituraSensor = $_POST['valSensor'] ?? '';
    echo 'O tipo da variável do sensor é de: ' . gettype($leituraSensor) . '<br>';

    $temperaturaReal = (float)$leituraSensor;
    $temperaturaReal += 1.2;
    echo 'Agora, o tipo da variável do sensor é de: ' . gettype($temperaturaReal) . '<br>';

    echo 'A temperatura corrigida é: ' . $temperaturaReal . '°C <br>';
?>