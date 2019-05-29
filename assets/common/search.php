<?php
header("content-type:text/html;charset=utf-8");
$Text = $_POST["searchText"];
$type = $_POST["seltype"];
$flag = $_POST["flag"];

if($Text==null&&$type !="allSearch"){
    header("location:/search.html");//直接打开该php文件，跳转到登录界面
}


$db=@new mysqli("localhost","root","");
if ($db->connect_error)
    die('链接错误: '. $db->connect_error);
$db->select_db('test') or die('不能连接数据库');
mysqli_query($db, "set names 'utf8'");//设置数据库utf8编码

$arr = array();

$tep="";
$sou=$Text;
$len=mb_strlen($Text,'utf-8');
for($i=0;$i<$len;$i++){
    $cha=mb_substr($Text,$i,1,'utf-8');
    if($i<$len-1)
        $tep=$tep.$cha.'%';
    else $tep=$tep.$cha;

}

$Text=$tep;
//echo $Text;
if($flag==0){
    $sql="SELECT * FROM students ";
    $rs=mysqli_query($db,$sql);

    while($row = mysqli_fetch_array($rs)){
        array_push($arr,$row);
    }
}
else if($type=="name"){

    $sql="SELECT * FROM students  WHERE real_name like '%".$Text."%'";
    $rs=mysqli_query($db,$sql);

    while($row = mysqli_fetch_array($rs)){
        array_push($arr,$row);
    }

}else if($type=="year"){
    $sql="SELECT * FROM students  WHERE enter_year= ".$sou;
    $rs=mysqli_query($db,$sql);
    while($row = mysqli_fetch_array($rs)){
        array_push($arr,$row);
    }
}else {
    $sql="SELECT * FROM students  WHERE class_id= ".$sou;
    $rs=mysqli_query($db,$sql);
    while($row = mysqli_fetch_array($rs)){
        array_push($arr,$row);
    }
}
$brr= array();
for($i=0; $i<count($arr);$i++){



        $brr[]=array("name"=>$arr[$i][3],"card_no"=>$arr[$i][4],"year"=>$arr[$i][6],"class"=>$arr[$i][7],"mobile"=>$arr[$i][8]);

}

echo json_encode($brr);//输出json数据
?>