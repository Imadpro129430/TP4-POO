<?php
require_once 'Personnage.php';

$merlin = new Personnage('Savitar', 100, 20);
$Harry = new Personnage('Kaaris', 100, 110);
//$merlin->crier();
//$merlin->setVie(100);
//var_dump($merlin);
//$merlin->regenerer(20);
$Harry->attaque($merlin);
echo $merlin->getVie();
//var_dump($merlin->estMort());

?>