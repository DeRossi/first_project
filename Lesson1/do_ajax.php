<?php 
if(isset($_POST["text1"])){
	$string = json_encode($_POST);
	if(file_put_contents("data/file_".time().".txt", $string)){
		echo "done";
		die;
	}else{
		echo "error" ;
		die;
	}
	
}
?>