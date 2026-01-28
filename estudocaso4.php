
<!-- 4. Verificador de Desconto em Farmácia
O Problema: Uma farmácia dá descontos para idosos. 
O Desafio: Defina o valorDaCompra e a idade. 
Se a idade for 60 ou mais, aplique um desconto de 20% no valor e exiba o novo preço. 
Caso contrário, exiba o valor original. -->



<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$idade = $_POST['idade'];
$valorDaCompra = (float)$_POST['valor'];
$desconto = (float) $_POST['desconto'];

// $idade = 40;

// $valorDaCompra = 200;

// $desconto = 0.20; esses comentarios é para saber se deu certo os codigos


if ($idade >= 60) {             

    $valorDesconto =  ($desconto * $valorDaCompra) / 100 ;  
    $valorDaCompra = $valorDaCompra - $valorDesconto;
    echo "O valor final do valor da compra é: R$ " . $valorDaCompra;


}
else{
    echo"Compra sem desconto, idade menor que 60 <br> O valor final do valor da compra é:R$ $valorDaCompra";
}




}

?>

