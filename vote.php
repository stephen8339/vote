<?php
/**
 * Created by PhpStorm.
 * User: liusong
 * Date: 2016/7/19
 * Time: 15:01
 */
require_once 'functions.php';


if(empty($_POST['option'])){
    die('您没有选择任何选项！');
}

if(isset($_POST['option'])){
    $result = $_POST['option'];
    mysqli_query($conn,"UPDATE vote SET sum = sum+1 WHERE `option` = '$result'");
    if(mysqli_errno($conn)){
        echo mysqli_error($conn);
    }else{
        echo "<script>alert('您选择了$result');parent.location.href='index.html';</script>";
        echo "<br>";
    }
}
?>