<?php
echo 'introdução a PHP';
// Variaveis
$nome = 'Fausto Vilanova';
$ano = 2024;
echo '<br />';
echo $nome;
// operadores matematicos
// + - * / 
$idade = $ano - 1981;
echo '<hr/> idade é ' . $idade;
echo '<br />';
echo 2 + 3 * 5;
echo '<br />';
echo (2 + 3) * 5;
echo '<br />';
// variaveis de variaveis
$campo = 'curso';
$curso = "Personal Home Page (PHP)";
echo $$campo;

