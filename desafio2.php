<?php

 

$idade = 12;

$ehAniversario = true; // 'true' significa que é aniversário

$valorIngresso = 100;

 

// Verificando a idade para meia entrada

if ($idade <= 12) {             //faltou o sinal de =

    $valorIngresso = $valorIngresso / 2;    //no lugar do valor fixo 50, coloquei a variável valo ingresso

}

 

// Aplicando desconto de aniversário
if ($ehAniversario == true) {               // operador de comparação
    $valorIngresso = $valorIngresso - 10;
}

    
 
echo "O valor final do ingresso é: R$ " . $valorIngresso;
 
?>

