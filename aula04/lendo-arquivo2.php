<?php 

$arquivo = fopen('arq.txt', 'r');

echo "<pre>";
while (!feof($arquivo)) {
	$linha = fgets($arquivo);
	$arr = explode(';', $linha);
	print_r($arr);
}

fclose($arquivo);