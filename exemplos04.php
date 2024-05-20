<?php
$salario = 2500;
$valeTransporte = 'Não';

if ($valeTransporte == 'Sim') {
    $valorVt = $salario * 6 / 100;
} else {
    $valorVt = 0;
}
echo 'Valor do vale transporte é ' . $valorVt;
echo '<br/>';

$estadoCivil = 3;
/* Estado Civil
1 = Solteiro(a)
2 = Casado(a)
3 = Separado(a)
4 = Viuvo(a)
*/
echo '<br/>';
switch ($estadoCivil) {
    case 1:
        echo 'Solteiro(a)';
        break;
    case 2:
        echo 'Casado(a)';
        break;
    case 3:
        echo 'Separado(a)';
        break;
    case 4:
        echo 'Viuvo(a)';
        break;
    default:
        echo 'Opção invalida';
}

$valorA = '123';
$valorB = 123;
echo '<hr />';
echo $valorA == $valorB ? 'Verdadeiro' : 'Falso';
echo '<br />';
echo $valorA === $valorB ? 'Verdadeiro' : 'Falso';
echo '<br />';
echo $valorA != $valorB ? 'Verdadeiro' : 'Falso';
echo '<br />';
echo $valorA > $valorB ? 'Verdadeiro' : 'Falso';
