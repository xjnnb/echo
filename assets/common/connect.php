<?php
function Connect($pword,$dbna){
    $db=@new mysqli("localhost","root",$pword);
    header('Content-Type: text/html;charset=utf-8');
    if ($db->connect_error)
        die('链接错误: '. $db->connect_error);
    $db->select_db($dbna) or die('不能连接数据库');
    mysqli_query($db, "set names 'utf8'");//设置数据库utf8编码
}

?>