<?php
require "connect.php";//链接数据库

session_start();
$uid=$_SESSION["uid"];

$arr = array();
$sql = "select real_name,image from students where id = ".$uid.";";

$rs = mysqli_query($db, $sql);
while ($rows = mysqli_fetch_array($rs)) {
    array_push($arr, $rows);
}

$brr= array();
for($i=0; $i<count($arr);$i++){
    $brr[]=array("real_name"=>$arr[$i][0],"image"=>$arr[$i][1]);
}

echo json_encode($brr);//输出json数据
?>
