<?php 
require(__DIR__."/../library/class/matrix.php") ;
$environment_1 = new Evironment;

$matrix_1 = new Matrix($environment_1);

$matrix_1->show();

$matrix_1->mye->show();

$matrix_1->mye->change_color();

$matrix_1->mye->show();

?>