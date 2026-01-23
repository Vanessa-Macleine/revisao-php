<?php

$numero1 = 15.50; // decimal (float)
$numero2 = 6; // tipo inteiro
$descricao = "Marmita Individual Premium"; // tipo varchar, string

$soma = $numero1 + $numero2;

echo "A " .$descricao . " Valor ". $numero1. " + Entrega " .$numero2. " = " .$soma. "<br><br>";

if ($soma<25) {
    echo " Comprar a marmita";
} else{
    echo " Esta caro não compra";
}










?>