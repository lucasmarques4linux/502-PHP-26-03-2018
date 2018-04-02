<?php 

//file://

//http://

$google = fopen('https://www.lucasmarques73.com.br','r');
while (!feof($google)) {
	$linha = fgets($google);
	echo $linha;
};

//ftp://

//php://