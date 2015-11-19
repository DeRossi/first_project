<?php session_start(); ?>
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
    require(__DIR__."/../library/class/motion.php") ;
    if(!isset($_SESSION["count"])){
        $_SESSION["count"]=0;
    }
    $_SESSION["count"]++;
    $matrix_1 = new Motion(10);
    if(!isset($_SESSION["count"])){
        $matrix_1->create_matrix();
    }else{
        $matrix_1->open();
    }

    $matrix_1->move($_POST["action"]);
    $matrix_1->show_motion();
    $matrix_1->save();
    

?>