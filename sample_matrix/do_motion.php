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
    $my_map = new Map_matrix(10);
    if(!isset($_SESSION["count"])){
        $my_map->create_matrix();
    }else{
        $my_map->open();
        $my_map->element1->open();
    }
    $my_map->element1->move($_POST["action"]);
    $my_map->element1->save();
    $my_map->show_motion();
    $my_map->save();
    

?>