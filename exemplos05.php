<?php
$idade = 25;
$sexo = 'F';
/*
ou - or -  || = +(soma)
1          || 0          = 1
0          || 0          = 0
0          || 1          = 1
1          || 1          = 1

      falso        falso
*/
if ($idade >= 18 || $sexo === 'F') {
    echo 'Verdadeiro';
} else {
    echo 'falso';
}
echo '<hr />';
/*
e  - and - && * (multiplicação)
1          && 0          = 0
0          && 0          = 0
0          && 1          = 0
1          && 1          = 1

*/
if ($idade >= 18 && $sexo === 'F') {
    echo 'Verdadeiro';
} else {
    echo 'falso';
}
echo '<hr />';
