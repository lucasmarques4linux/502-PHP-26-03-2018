<?php 

echo 'oi <br>';
echo md5('oi') . '<br>';
echo sha1('oi') . '<br>';
echo md5('oi') . '<br>';
echo sha1('oi') . '<hr>';

$email = 'lucas';
$senha = '123';

$hash = password_hash("{$email}{$senha}",PASSWORD_BCRYPT);
echo $hash . '<br>';

if (password_verify("{$email}{$senha}",$hash)) {
	echo "Ok";
}