<?php 
// SplFileObject

// Lendo arquivo

$arquivo = new SplFileObject('arquivo.txt');

while (!$arquivo->eof()) {
	$linha = $arquivo->fgets();
	echo nl2br($linha);
}

echo "<hr>";

foreach ($arquivo as $linha) {
	echo nl2br($linha);
}