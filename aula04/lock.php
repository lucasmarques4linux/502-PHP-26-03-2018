<?php 

$arquivo = fopen('arquivo.txt', 'w+');

if (flock($arquivo,LOCK_EX)) {
	sleep(10);
	flock($arquivo, LOCK_UN);
} else {
	echo "Arquivo está bloqueado";
}

fclose($arquivo);