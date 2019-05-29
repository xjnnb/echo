<?php
//header("content-type:text/html;charset=utf-8");
$db=@new mysqli("localhost","root","123456");
if ($db->connect_error)
    die('链接错误: '. $db->connect_error);
$db->select_db('test') or die('不能连接数据库');
mysqli_query($db, "set names 'utf8'");//设置数据库utf8编码

$arr = array();


$sql = "select real_name,card_no,enter_year,class_id,mobile from students;";

$rs = mysqli_query($db, $sql);
while ($rows = mysqli_fetch_array($rs)) {
    array_push($arr, $rows);
}

$brr= array();
for($i=0; $i<count($arr);$i++){

    $brr[]=array("real_name"=>$arr[$i][0],"card_no"=>$arr[$i][1],"enter_year"=>$arr[$i][2],"class_id"=>$arr[$i][3],"mobile"=>$arr[$i][4]);

}

echo json_encode($brr);//输出json数据

?>
