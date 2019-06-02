 <?php
    require "connect.php";//链接数据库

    $user = $_POST["user"];
    $pwd = $_POST["password"];
    $select = $_POST["select"];
    $arr = array();
    if($user==null||$pwd==null){
        header("location:../../index.html");//直接打开该php文件，跳转到登录界面
    }


    if ($select == "admin"){//在管理员的表中查找用户
        $sql="SELECT * FROM admins  WHERE admin_name='".$user."' AND admin_pwd='".$pwd."';";

        $result=$db->query($sql);
        $num_users=$result->num_rows;//在数据库中搜索到符合的用户
        if($num_users!=0){
            $rs = mysqli_query($db, $sql);//获取sql字段
            while ($rows = mysqli_fetch_array($rs)) {
                array_push($arr, $rows);
            }
            $flag=1;
            session_start();
            $_SESSION["uid"]=$arr[0][0];
        }

    }
    else if ($select == "student"){ //在学生的表中查找用户
        $sql="SELECT * FROM students  WHERE user_name='".$user."' AND  ISSUE =1 AND user_pwd='".$pwd."';";

        $result=$db->query($sql);
        $num_users=$result->num_rows;//在数据库中搜索到符合的用户
        if($num_users!=0){
            $rs = mysqli_query($db, $sql);//获取sql字段
            while ($rows = mysqli_fetch_array($rs)) {
                array_push($arr, $rows);
            }
            $flag=2;
            session_start();
            $_SESSION["uid"]=$arr[0][0];
        }
    }

//    组装json
 $data=[
     'flag'=>$flag,
     'userid'=>$_SESSION["uid"]
 ];
//返回json数据
 echo json_encode($data);//输出json数据
sleep(0.5);

?>
