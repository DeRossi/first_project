<style>
.clearfix {
    clear: both;
}
.ele_n {
    float: left;
    width: 30px;
    height: 30px;
    border: 1px solid #ccc;
    text-align: center;
    margin: 2px;
    overflow: hidden;
    font-size: 18px;
    line-height: 31px;
}
</style>
<?php 
	require(__DIR__."/../library/class/matrix.php") ;
	$s = microtime();
	$matrix_1 = new Matrix(10);
	$matrix_1->create_matrix();

	$matrix_1->bubblesort();
	$matrix_1->show_matrix();

	$matrix_1->symmetry();
	$matrix_1->show_matrix();

	$matrix_1->route_left();
	$matrix_1->show_matrix();

	$matrix_1->route_right();
	$matrix_1->show_matrix();
	$e = microtime();
	echo $e-$s;

?>