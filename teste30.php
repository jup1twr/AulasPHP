<?php
/*Esse sistema foi desenvolvido para o caixa de uma loja de departamentos, tem como objetivo capturar e registar automaticamente, tanto os valores que entram no caixa quanto os que saem e alem disso ela irá registrar o nome do operador e o status do terminal (aberto ou fechado )*/ //QUESTÃO A 

$valortotal_compra = "234"; //QUESTÃO B
$total_itens = 1;          //QUESTÃO C
$nível_fidelidade = 2;      //QUESTÃO D

echo "Valor total da compra:" . gettype($valortotal_compra) . "<br>"; // string        //QUESTÃO E
echo "Total de itens da compra do cliente:" . gettype($total_itens) . "<br>"; // int   //QUESTÃO E
echo "Nivel de fidelidade:" . gettype($nível_fidelidade) . "<br>"; // int              //QUESTÃO E

$statusAtivo = true; //QUESTÃO F

number_format($valortotal_compra,2) . "<br>"; //QUESTÃO G


$valorUnitario = 3.00;

echo "Novo item adicionado . Valor Total: R$ x - y itens" ."<br>";

switch($nível_fidelidade){
	case 1:
		$cliente = "Nivel 1";
		$desconto = "Sem desconto";
		break;	
	case 2:
		$cliente = "Nivel 2";
		$desconto = 0.05;
		break;	  

	case 3:
		$cliente = "Nivel 2";
		$desconto = 0.010;
		break;	  

	default:
		echo "Categoria não mapeada";
		exit;
}
 
if ($valortotal_compra >= 500 && $total_itens >10){
	echo "Venda Atacadista"."<br>";
}else{
	echo "Venda Varejista" ."<br>";	
}



?>