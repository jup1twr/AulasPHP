<!DOCTYPE html>
<html lang ='pt-br'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Formulário</title>
    </head>
    <body>
        <h1>Formulário</h1>
        <form action='testes.php' method='POST'> 
        <!-- method='POST': não aparece na URL 
        method='GET': aparece o name='nomeUsuario' e o que foi recebido na URL -->
            <label for='nome'>Nome:</label>
            <input type="text" id='nome' name='nome' required>
                    <br><br>
            <input type='submit' value='Enviar'>
        </form>
    </body>
 </html>

    <?php
        $nome = $_POST['nome'] ?? '';
        echo 'Nome recebido: ' . $nome;
    ?>