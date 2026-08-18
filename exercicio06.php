<?php
    $bat = 65;
    while ($bat < 100){
        echo '<i> Carregando... </i><br>';
        echo '<i><b> Nível atual: </i></b>' . $bat . '% <br>';
        $bat +=5;
    }

    echo '<i> Bateria <b> totalmente carregada </b> (100%)!</i>'
?>