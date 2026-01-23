<?php

$vendedor = "Lucas"; //faltou ;
$valorVenda = 1500; // não precisa de aspas no numero
$bonus = 0; //faltou ;

if ($valorVenda > 1000) {
    $bonus = $valorVenda * 0.10; // faltou ;
    echo "Parabéns $vendedor! Seu bônus é de: " . $bonus; // faltou $ no bonus
} else {  // faltou as chaves
    $bonus = $valorVenda * 0.05;
    echo "Venda registrada. Bônus: " . $bonus;
    }

    // faltou fechar o codigo
?> 
