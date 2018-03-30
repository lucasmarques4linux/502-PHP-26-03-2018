<?php 

// Abrindo arquivo
$arquivo = new SplFileObject('pessoas.csv');

// Setando flags para
// READ_CSV - Ler csv
// SKIP_EMPTY - pular linha em branco
$arquivo->setFlags(SplFileObject::READ_CSV | SplFileObject::SKIP_EMPTY );

// Percorrendo meu arquivo
// foreach ($arquivo as $linha) {
// 	print_r($linha);	
// }

echo "<hr>";

while (!$arquivo->eof()) {
	
	$linha = $arquivo->fgetcsv(";");

	// Criando variaveis da minha linha
	list($nome,$dataNasc) = $linha;
	echo "Nome: {$nome}" . "<br>";
	echo "Data de Nascimento: {$dataNasc}" . "<br>";
	echo "<hr>";
}