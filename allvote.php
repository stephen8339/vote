<?php
/**
 * Created by PhpStorm.
 * User: liusong
 * Date: 2016/7/19
 * Time: 17:19
 */
require_once "functions.php";
$option1 = mysqli_query($conn,"SELECT `sum` FROM vote WHERE `option` = '选项1'");
$result_option1 = mysqli_fetch_array($option1);
$result_option1_arr = intval($result_option1['sum']);
if(mysqli_errno($conn)){
    echo mysqli_error($conn);
}

$option2 = mysqli_query($conn,"SELECT sum FROM vote WHERE `option` = '选项2'");
$result_option2 = mysqli_fetch_array($option2);
$result_option2_arr = intval($result_option2['sum']);
if(mysqli_errno($conn)){
    echo mysqli_error($conn);
}

$option3 = mysqli_query($conn,"SELECT sum FROM vote WHERE `option` = '选项3'");
$result_option3 = mysqli_fetch_array($option3);
$result_option3_arr = intval($result_option3['sum']);
if(mysqli_errno($conn)){
    echo mysqli_error($conn);
}

$option4 = mysqli_query($conn,"SELECT sum FROM vote WHERE `option` = '选项4'");
$result_option4 = mysqli_fetch_array($option4);
$result_option4_arr = intval($result_option4['sum']);
if(mysqli_errno($conn)){
    echo mysqli_error($conn);
}

$option5 = mysqli_query($conn,"SELECT sum FROM vote WHERE `option` = '选项5'");
$result_option5 = mysqli_fetch_array($option5);
$result_option5_arr = intval($result_option5['sum']);
if(mysqli_errno($conn)){
    echo mysqli_error($conn);
}

$data1=$_GET['data1'];
$data2=$_GET['data2'];
$data3=$_GET['data3'];
$data4=$_GET['data4'];
$data5=$_GET['data5'];

echo "var option1=$result_option1_arr;";
echo "var option2=$result_option2_arr;";
echo "var option3=$result_option3_arr;";
echo "var option4=$result_option4_arr;";
echo "var option5=$result_option5_arr;";
?>
