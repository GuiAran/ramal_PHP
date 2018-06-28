<?php
$senha = '1234';
$salt = 'Nao entre em panico!!';


$teste = crypt($senha, $salt);

echo $teste;

echo '<hr>';

$teste2 = md5($senha);

echo $teste2;