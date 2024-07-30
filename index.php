<?php
	$nome = "Weber";
	$sobrenome = "Lizardo";
	$nomeCompleto = $nome . " " . $sobrenome;
	echo $nomeCompleto;
	echo "<br/>";
	echo $nome;
	echo "<br/>";
	var_dump($nome);
	echo "<br/>";
	unset($nome);

	// isset se a variável for definida
	if (isset($nome)){
		echo $nome;
		echo "<br/>";
	}

	$nome = "Nome";
	$site = 'Site';
	$ano = 2024;
	$salario = 5000.50;
	$bloqueado = false;

	$frutas = array("abacaxi", "laranja", "manga");
	echo $frutas[2];
	echo "<br/>";

	$nascimento = new DateTime();
	var_dump($nascimento);
	echo "<br/>";

	$arquivo = fopen("index.php", "r");
	var_dump($arquivo);
	echo "<br/>";

	$nulo = NULL;
	
?>