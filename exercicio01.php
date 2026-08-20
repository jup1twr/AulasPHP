<?php
$leituraSensor = "24.5";
echo gettype($leituraSensor) . "<br>";

$temperaturaReal = (float)$leituraSensor;
$temperaturaReal += 1.2;

echo "A temperatura corrigida é: " . $temperaturaReal . " °C<br>";
?>