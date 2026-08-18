<?php
	/* Este arquivo é o sistema de vendas 
	(ou sistema de caixa) da Loja de Departamentos.*/

	$valorCompra = '550'; // tarefa B, formato TEXTO (string) 
	$qtdItens = 10; // tarefa C, formato INT (inteiro). 
	$fielCliente = 2; // tarefa D, formato INT (inteiro).
	
	echo 'O tipo da variável $valorCompra é: '. gettype($valorCompra) . '<br>'; // tarefa E
	echo 'O tipo da variável $qtdItens é: '. gettype($qtdItens) . '<br>'; // tarefa E
	echo 'O tipo da variável $fielCliente é: '. gettype($fielCliente) . '<br>'; // tarefa E
	
	$statusSys = false; // tarefa F, representando o status do sistema 'true'
	$valorCompra = (float)$valorCompra;
	echo 'Agora, o tipo da variável $valorCompra foi atualizado para: ' . gettype($valorCompra) . '<p>'; // tarefa G, transformando o valorCompra em um número com casas decimais

	$valorCompra += 3; // tarefa H, adicionando o valor do chocolate 
	$qtdItens += 1; // tarefa H, adicionando mais um item (o chocolate)

	echo "Novo item adicionado. Valor Total: R$ $valorCompra - $qtdItens itens <p>"; 
	// tarefa I, retornando a mensagem solicitada com os valores atuais de valorCompra e qtdItens

	$opCaixa = $GET['Nome'] ?? 'Operador Padrão';
	// tarefa J, tenta receber o nome do opCaixa, caso não receba nenhum valor é definido como padrão 'Operador Padrão'
	
	// abaixo, estrutura SWITCH solicita na tarefa K, programando uma saída diferente para cada nível do fielCliente e estabelecendo a Categoria não mapeada.
	switch ($fielCliente) { 
		case 1: 
			echo 'Bem-vindo! Você é um cliente novo, <b> Cliente Básico. </b> <br>';
			echo 'Torne-se um cliente fiel e adquira descontos de até 10%.';
			break;
		case 2:
			echo 'Uhul! Você é um cliente nível 02, <b> Cliente Intermediário. </b> <br>';
			$descontoFiel = $valorCompra * 0.05;
			$valorCompra = $valorCompra - $descontoFiel;
			echo 'Você ganhou 5% de desconto pela fidelidade! <br> Continue comprando para se tornar um Cliente Premium e obter mais 5% de desconto! ;) <br>' . 'Agora, seu Valor Total é de R$ ' . $valorCompra . '<p>';
			break;
		case 3:
			echo 'Eba! Você é um cliente nível 03, <b> Cliente Premium. </b><br>';
			$descontoFiel = $valorCompra * 0.1;
			$valorCompra = $valorCompra - $descontoFiel;
			echo 'Parabéns! Você ganhou 10% de desconto na sua compra. Agradecemos a preferência <3 <br>' . 'Agora, seu Valor Total é de R$ ' . $valorCompra . '<p>';
			break;
		default:
			echo 'Categoria não mapeada';
			exit;

	}

	$tipoVenda = ($valorCompra >= 500 && $qtdItens > 10 ? 'Venda Atacadista <p>' : 'Venda Varejista <p>'); // tarefa L, verificando o tipo de venda

	// tarefa M, função para calcular a taxa de impostos.

	function txImposto(){
		global $fielCliente;
		global $valorCompra;
		global $statusSys;
		
		$valorAntes = $valorCompra;
		if ($fielCliente < 1 || $fielCliente > 3){
			$taxa = 0.15 * $valorCompra;
			$valorCompra += $taxa;
			return $taxa;
		} elseif ($statusSys != true) {
			$taxa = 0.15 * $valorCompra;
			$valorCompra += $taxa;
			return $taxa;
		} else {return 'Sem imposto para calcular';}
	}
	
	// tarefa N, uma função que recebe o valorCompra e retorna as opções de parcelamento
	function opParcelamento(){
		global $valorCompra;
		$valorAtual = $valorCompra;
		$qtdParcelas = 6;
		echo '<b> Opções de parcelamento </b><br>';

		for ($parcela = 1; $parcela <= $qtdParcelas; $parcela++){
			$valorParcela = $valorCompra / $parcela;
			echo 'O valor da parcela é: R$' . $valorParcela . '<p>';
		}
		
	}
	
	opParcelamento();
	
	echo 'Nome: ' . $opCaixa . '<br>' . 'Venda registrada: '. $tipoVenda . '<br>' . 'Imposto calculado: R$' . txImposto() . '<br>' . 'Valor final da compra R$' . $valorCompra . '<br>';
	
	
?>