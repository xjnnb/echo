<?php

require "connect.php";//链接数据库

$id=$_POST["id"];
$user_name=$_POST["user_name"];
$real_name=$_POST["real_name"];
$mobilb=$_POST["mobilb"];
$business=$_POST["business"];
$card_no=$_POST["card_no"];
$address=$_POST["address"];
$zipcode=$_POST["zipcode"];
$enter_year=$_POST["enter_year"];

$fileurl="nosource";
$fileurl=$_POST["fileurl"];

$password=$_POST["password"];
$notify_state=$_POST["notify_state"];
$notify_state=substr($enter_year, 2, 2).$notify_state;

$flag='0';

$sql="SELECT * FROM students WHERE ISSUE =1 AND id='".$id."';";
$rs =mysqli_query($db,$sql);
if(mysqli_num_rows($rs)>0)$flag='1';

$sql="SELECT * FROM students WHERE ISSUE =0 AND id='".$id."';";
$rs =mysqli_query($db,$sql);
if(mysqli_num_rows($rs)>0){
    $sql="DELETE  from students WHERE  id='".$id."';";
    $rs =mysqli_query($db,$sql);
}


$s2=1;
if($flag=='0'){
    $sql = "insert into students values  (".$id.",'".$user_name."','".$password."','".$real_name."','".$card_no."','".$business."','".$enter_year."',".$notify_state.",'".$mobilb."','".$address."','".$zipcode."','".$fileurl."',".$s2.");";

        $rs =mysqli_query($db,$sql);

}
$arr = array();
$arr[] = array("result" => $flag);

echo json_encode($arr);

?>
