<?php 
require(__DIR__."/../library/class/matrix.php") ;
$environment_1 = new Evironment;
$environment_2 = new Evironment;
$matrix_1 = new Matrix;

$matrix_1->create_evironment($environment_1);

$matrix_1->create_evironment($environment_2);

$matrix_1->show();

$matrix_1->mye[0]->show();

$matrix_1->mye[0]->change_color();

$matrix_1->mye[0]->show();

$matrix_1->mye[1]->show();

$matrix_1->mye[1]->change_color();

$matrix_1->mye[1]->show();

?>