<?php
 if (isset($_POST['txt'])) {
 	if(file_put_contents("".time().".txt", json_encode($_POST))){
 		echo "done";
 		die();
 	}else{
 		echo "erros";
 		die();
 	}
 }
?>
