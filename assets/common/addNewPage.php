<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>实验室信息管理系统</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/ready.css">
    <link rel="stylesheet" href="../css/demo.css">
    <link rel="stylesheet" href="../css/addnew.css" type="text/css">
    <![endif]-->
</head>

<body>
<?php include ('nav.php'); ?>
<div class="container-fluid">
    <div class="row">
        <?php include ('sidebar.php'); ?>
        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="card">
                                <div class="card-sub" style="margin: 10px;margin-top: 15px">
                                    <ul class="breadcrumb" style="margin-bottom: 0px;">
                                        <li><a href="../common/main.html">首页</a></li>
                                        <li class="active">新增人员</li>
                                    </ul>
                                </div>
                                <div class="card-body col-md-7">
                                    <div class="form">
                                        <div class="form-group from-show-notify row">
                                            <div class="col-lg-4 col-md-3 col-sm-12 text-right">
                                                <label>学号:</label>
                                            </div>
                                            <div class="col-lg-6 col-md-9 col-sm-12">
                                                <input type="text" class="form-control" id="id" placeholder="请输入学号">
                                            </div>
                                        </div>
                                        <div class="form-group from-show-notify row">
                                            <div class="col-lg-4 col-md-3 col-sm-12 text-right">
                                                <label>用户名:</label>
                                            </div>
                                            <div class="col-lg-6 col-md-9 col-sm-12">
                                                <input type="text" class="form-control" id="user_name" placeholder="请输入用户名">
                                            </div>
                                        </div>
                                        <div class="form-group from-show-notify row">
                                            <div class="col-lg-4 col-md-3 col-sm-12 text-right">
                                                <label>密码:</label>
                                            </div>
                                            <div class="col-lg-6 col-md-9 col-sm-12">
                                                <input type="password" class="form-control" id="password" placeholder="请输入密码">
                                            </div>
                                        </div>
                                        <div class="form-group from-show-notify row">
                                            <div class="col-lg-4 col-md-3 col-sm-12 text-right">
                                                <label>真实姓名:</label>
                                            </div>
                                            <div class="col-lg-6 col-md-9 col-sm-12">
                                                <input type="text" class="form-control" id="real_name" placeholder="请输入真实姓名">
                                            </div>
                                        </div>
                                        <div class="form-group from-show-notify row">
                                            <div class="col-lg-4 col-md-3 col-sm-12 text-right">
                                                <label>手机号:</label>
                                            </div>
                                            <div class="col-lg-6 col-md-9 col-sm-12">
                                                <input type="text" class="form-control" id="mobilb" placeholder="请输入手机号">
                                            </div>
                                        </div>
                                        <div class="form-group from-show-notify row">
                                            <div class="col-lg-4 col-md-3 col-sm-12 text-right">
                                                <label>工作单位:</label>
                                            </div>
                                            <div class="col-lg-6 col-md-9 col-sm-12">
                                                <input type="text" class="form-control" id="business" placeholder="请输入工作单位">
                                            </div>
                                        </div>
                                        <div class="form-group from-show-notify row">
                                            <div class="col-lg-4 col-md-3 col-sm-12 text-right">
                                                <label>证件号:</label>
                                            </div>
                                            <div class="col-lg-6 col-md-9 col-sm-12">
                                                <input type="user_name" class="form-control" id="card_no" placeholder="请输入身份证">
                                            </div>
                                        </div>
                                        <div class="form-group from-show-notify row">
                                            <div class="col-lg-4 col-md-3 col-sm-12 text-right">
                                                <label>通讯地址:</label>
                                            </div>
                                            <div class="col-lg-6 col-md-9 col-sm-12">
                                                <input type="user_name" class="form-control" id="address" placeholder="请输入通讯地址">
                                            </div>
                                        </div>
                                        <div class="form-group from-show-notify row">
                                            <div class="col-lg-4 col-md-3 col-sm-12 text-right">
                                                <label>邮编:</label>
                                            </div>
                                            <div class="col-lg-6 col-md-9 col-sm-12">
                                                <input type="user_name" class="form-control" id="zipcode" placeholder="请输入邮编">
                                            </div>
                                        </div>
                                        <div class="form-group from-show-notify row">
                                            <div class="col-lg-4 col-md-3 col-sm-12 text-right">
                                                <label>入学年份:</label>
                                            </div>
                                            <div class="col-lg-6 col-md-9 col-sm-12">
                                                <select class="form-control input-fixed" id="enter_year">
                                                    <option value="2018">2018</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2015">2015</option>
                                                    <option value="2014">2014</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group from-show-notify row">
                                            <div class="col-lg-4 col-md-3 col-sm-12 text-right">
                                                <label>班级:</label>
                                            </div>
                                            <div class="col-lg-6 col-md-9 col-sm-12">
                                                <select class="form-control input-fixed" id="notify_state">
                                                    <option value="1">1班</option>
                                                    <option value="2">2班</option>
                                                    <option value="3">3班</option>
                                                    <option value="4">4班</option>
                                                    <option value="5">5班</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body col-md-5">
                                    <div class="form">
                                        <div class="form-group">
                                            <div id="feedback">
                                                <div class="box">
                                                    <a href="javascript:;" class="file">选择图片
                                                        <input type="file" id="inputfile" name="photo" class="photo">
                                                    </a>
                                                    <label>选择并上传头像,大小在4MB以内</label>
                                                    <!--                                                        <a href="javascript:;" class="file close">重新选择-->
                                                    <!--                                                            <input type="button" class="photo">-->
                                                    <!--                                                        </a>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="form">
                                        <div class="form-group from-show-notify row">
                                            <div class="col-lg-5 col-md-5 col-sm-12">
                                                <div></div>
                                            </div>
                                            <div class="col-lg-7 col-md-7 col-sm-12" style="padding-left: 550px">
                                                <button id="displayNotif" type="button" class="btn btn-success">确认提交</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include ('footer.php'); ?>
        </div>
    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->

<script src="../js/jquery.3.2.1.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="../js/addNew.js"></script>
<script src="../js/ready.min.js"></script>

</body>

</html>