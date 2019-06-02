<?php
include "connect.php";
$card_no=$_POST["card_no"];
$flag=$_POST["flag"];


if($flag==1){
//    删除用户
//    update person set number=null,name=null;
    $sql="UPDATE students SET  ISSUE =0 WHERE card_no='".$card_no."';";
    mysqli_query($db,$sql);
}else if($flag==0){
    $sql="SELECT * FROM students WHERE card_no='".$card_no."';";
    $rs=mysqli_query($db,$sql);
    $arr=array();
    while($row = mysqli_fetch_array($rs)){
        array_push($arr,$row);
    }
    $brr= array();
    for($i=0; $i<count($arr);$i++){

        $brr[]=array("id"=>$arr[$i][0],"user_name"=>$arr[$i][1],"password"=>$arr[$i][2],"real_name"=>$arr[$i][3],"mobile"=>$arr[$i][8],"business"=>$arr[$i][5],"card_no"=>$arr[$i][4],"address"=>$arr[$i][9],"zipcode"=>$arr[$i][10],"enter_year"=>$arr[$i][6],"class"=>$arr[$i][7]);

    }

    echo json_encode($brr);//输出json数据

}else{


    $id = $_POST["id"];
    $user_name = $_POST["user_name"];
    $real_name = $_POST["real_name"];
    $mobile = $_POST["mobile"];
    $business = $_POST["business"];
    $card_no = $_POST["card_no"];
    $address = $_POST["address"];
    $zipcode = $_POST["zipcode"];
    $enter_year = $_POST["enter_year"];

    $fileurl = "nosource";
    $fileurl = $_POST["fileurl"];

    $password = $_POST["password"];
    $notify_state = $_POST["notify_state"];
    $sql = "SELECT  image from students WHERE  id='" . $id . "';";
    $rs = mysqli_query($db, $sql);
    $crr=array();
    while($row = mysqli_fetch_array($rs)){
        array_push($crr,$row);
    }
    $fileurl=$crr[0][0];


    $sql = "DELETE  from students WHERE  id='" . $id . "';";
    $rs = mysqli_query($db, $sql);

    $s2 = 1;

    $sql = "insert into students values  (" . $id . ",'" . $user_name . "','" . $password . "','" . $real_name . "','" . $card_no . "','" . $business . "','" . $enter_year . "'," . $notify_state . ",'" . $mobile . "','" . $address . "','" . $zipcode . "','" . $fileurl . "'," . $s2 . ");";

    $rs = mysqli_query($db, $sql);




}



?>