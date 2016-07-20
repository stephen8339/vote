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

//require_once 'allvote.php';

//    echo "选项1：$result_option1_arr";
//    echo "<br>";
//
//    echo "选项2：$result_option2_arr";
//    echo "<br>";
//
//    echo "选项3：$result_option3_arr";
//    echo "<br>";
//
//    echo "选项4：$result_option4_arr";
//    echo "<br>";
//
//    echo "选项5：$result_option5_arr";
//    echo "<br>";

//$data1=$_GET['data1'];
//$data2=$_GET['data2'];
//$data3=$_GET['data3'];
//$data4=$_GET['data4'];
//$data5=$_GET['data5'];
//
//    echo "var option1=$result_option1_arr;";
//    echo "var option2=$result_option2_arr;";
//    echo "var option3=$result_option3_arr;";
//    echo "var option4=$result_option4_arr;";
//    echo "var option5=$result_option5_arr;";

?>