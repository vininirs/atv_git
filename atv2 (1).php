<?php
define("PI", 3.141592);

$raio = 7;

// Cálculo da área
$area = 4 * PI * pow($raio, 2);
echo "Área da esfera: " . $area . "<br>";

// Cálculo do volume
$volume = (4/3) * PI * pow($raio, 3);
echo "Volume da esfera: " . $volume . "<br>";
?>