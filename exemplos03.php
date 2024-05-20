<?php
$nomes = array('Fausto', 'João', 'Maria', 'Pedro');
print_r($nomes);
print_r('<br />');
print_r($nomes[2]);
print_r('<br />');
$cursos = array('a' => 'PHP', 'b' => 'HTML', 'c' => 'Javascript', 2 => 'React');
print_r($cursos);
print_r('<br />');
print_r($cursos['b']);
print_r('<br />');
print_r($cursos[2]);
print_r('<br />');
$comidas = array(
    'Frutas' => array('banana', 'laranja', 'maçã'),
    'vegetais' => array('cenoura', 'couve', 'ervilha')
);
print_r($comidas);
print_r('<br />');
print_r($comidas['Frutas'][1]);
print_r('<br />');
print_r($comidas['vegetais'][2]);
print_r('<br />');
print_r(count($comidas));
print_r('<br />');
print_r(count($comidas, COUNT_RECURSIVE));
array_push($comidas['Frutas'], 'uva');
print_r('<br />');
print_r($comidas['Frutas']);
$ultimoElemento = array_pop($comidas['Frutas']);
print_r('<br />');
print_r($ultimoElemento);
print_r('<br />');
print_r($comidas['Frutas']);
$primeiroElemento = array_shift($comidas['Frutas']);
print_r('<br />');
print_r($primeiroElemento);
print_r('<br />');
print_r($comidas['Frutas']);
