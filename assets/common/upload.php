<?php
header('content-type:text/html charset:utf-8');
$dir_base = "./uploadImages/";     //文件上传根目录
//没有成功上传文件，报错并退出。
$output = "<textarea>";
$index = 0;        //$_FILES 以文件name为数组下标，不适用foreach($_FILES as $index=>$file)
foreach($_FILES as $file){
    $upload_file_name = 'upload_file' . $index;        //对应index.html FomData中的文件命名
    $filename = $_FILES[$upload_file_name]['name'];
    $gb_filename = iconv('utf-8','gb2312',$filename);    //名字转换成gb2312处理
    //文件不存在才上传
    if(!file_exists($dir_base.$gb_filename)) {
        $isMoved = false;  //默认上传失败
        $MAXIMUM_FILESIZE = 4 * 1024 * 1024;     //文件大小限制4mb    1M = 1 * 1024 * 1024 B;
        $rEFileTypes = "/^\.(jpg|jpeg|gif|png){1}$/i";
        if ($_FILES[$upload_file_name]['size'] <= $MAXIMUM_FILESIZE &&
            preg_match($rEFileTypes, strrchr($gb_filename, '.'))) {
            $isMoved = @move_uploaded_file ( $_FILES[$upload_file_name]['tmp_name'], $dir_base.$gb_filename);        //上传文件
        }
    }else{
        $isMoved = true;    //已存在文件设置为上传成功
    }
    if($isMoved){
        //输出图片文件<img>标签
        $output .= "<img id='uploadphoto' src='{$dir_base}{$filename}' title='{$filename}' alt='{$filename}'/>";
    }else {
        //上传失败则把error.jpg传回给前端
        $output .= "<img id='uploadphoto' src='{$dir_base}error.jpg' title='{$filename}' alt='{$filename}'/>";
    }
    $index++;
}
echo $output."</textarea>";

//End_php