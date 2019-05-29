
<?php

//include ("connect.php");

header('Content-Type: text/html;charset=utf-8');

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

$db=@new mysqli("localhost","root","123456");


if ($db->connect_error)
    die('链接错误: '. $db->connect_error);
$db->select_db('test') or die('不能连接数据库');
mysqli_query($db, "set names 'utf8'");//设置数据库utf8编码

//Connect("","test");

$flag='0';

$sql="SELECT * FROM students WHERE id='".$id."';";
$rs =mysqli_query($db,$sql);
if(mysqli_num_rows($rs)>0)$flag='1';


$s2=1;
if($flag=='0'){
    $sql = "insert into students values  (".$id.",'".$user_name."','".$password."','".$real_name."','".$card_no."','".$business."','".$enter_year."',".$notify_state.",'".$mobilb."','".$address."','".$zipcode."','".$fileurl."',".$s2.");";

        $rs =mysqli_query($db,$sql);

}
$arr = array();
$arr[] = array("result" => $flag);
echo json_encode($arr);



?>
