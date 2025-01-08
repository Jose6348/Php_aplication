<?php

// Nome de usuário

echo "José Jorge\n";

//Média de notas 


$nota1 = 7;
$nota2 = 8;
$nota3 = 6;
$media = ($nota1 + $nota2 + $nota3) / 3;
echo "A média é: $media\n";

//Metros para Cm 

$metros = 5;
$centimetros = $metros * 100;

echo "$metros metros equivalem a $centimetros centímetros.\n";

//Ano bisexto 

$ano = 2024;
if (($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0) {
    echo "$ano é bissexto.";
} else {
    echo "$ano não é bissexto.";
}
echo "\n";
//Celsius para farenheit 



$temperaturaEmCelsius = 30.4; // Modifique esse valor para a temperatura que desejar
$temperaturaEmFahrenheit = $temperaturaEmCelsius * 1.8 + 32;

$mensagem = "A temperatura de $temperaturaEmCelsius Celsius é equivalente a $temperaturaEmFahrenheit Fahrenheit";

echo $mensagem;