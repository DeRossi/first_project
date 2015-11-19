<?php 
	require(__DIR__."/../library/class/matrix.php") ;
	$matrix_1 = new Matrix;
	$matrix_1->create_matrix();
	$matrix_1->replace_matrix(10,"sssssssss");
	$matrix_1->show_matrix();
?>