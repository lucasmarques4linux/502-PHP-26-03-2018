<?php 

$pessoas = [
	[
		'nome' => 'Heath Ledger',
		'data_nasc' => '19/05/1956',
	],
	[
		'nome' => 'Alfie Allen',
		'data_nasc' => '10/07/1993',
	],
	[
		'nome' => 'Taylor Kinney',
		'data_nasc' => '04/09/1979',
	],
	[
		'nome' => 'Audrey Hepburn',
		'data_nasc' => '13/07/1972',
	],
];

foreach ($pessoas as $pessoa) {
	$linha = "{$pessoa['nome']};{$pessoa['data_nasc']}" . PHP_EOL;
	file_put_contents('pessoas.csv', $linha,FILE_APPEND);
}