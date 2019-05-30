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
    <![endif]-->
    <link rel="stylesheet" href="../css/main.css" type="text/css">
</head>

<body>
<?php include ('nav.php'); ?>

<div class="container-fluid">
    <div class="row">
        <?php include ('sidebar.php'); ?>
        <div class="main-panel">
            <div class="content">
                <div class="container-fluid" id="main1" style="display:block">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <form action="" method="post">
                                <div class="card">
                                    <div class="card-body">
                                        <ul class="breadcrumb">
                                            <li><a href="../common/mainPage.php">首页</a></li>
                                            <li class="active">信息列表</li>
                                        </ul>
                                        <table class="table table-striped mt-3">
                                            <thead>
                                            <tr>
                                                <th scope="col">姓名</th>
                                                <th scope="col">身份证号</th>
                                                <th scope="col">入学年月</th>
                                                <th scope="col">班级</th>
                                                <th scope="col">手机</th>
                                                <th scope="col">操作</th>
                                            </tr>
                                            </thead>
                                            <tbody id="selectInfoTable">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php include ('pagination.php'); ?>
                </div>
                <div class="card" id="main2" style="display:none">


                    <div class="card-sub" style="margin: 10px;margin-top: 15px">
                        <ul class="breadcrumb" style="margin-bottom: 0px;">
                            <li><a href="../common/main.html">首页</a></li>
                            <li class="active">新增人员</li>
                        </ul>
                    </div>
                    <div class="card-body col-md-9">
                        <div class="form">
                            <div class="form-group from-show-notify row">
                                <div class="col-lg-4 col-md-3 col-sm-12 text-right">
                                    <label>学号:</label>
                                </div>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <input type="text" class="form-control" id="id" placeholder="请输入学号" disabled="disabled">
                                </div>
                            </div>
                            <div class="form-group from-show-notify row">
                                <div class="col-lg-4 col-md-3 col-sm-12 text-right">
                                    <label>用户名:</label>
                                </div>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <input type="text" class="form-control" id="user_name" placeholder="请输入用户名" disabled="disabled">
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
                                    <input type="text" class="form-control" id="real_name" placeholder="请输入真实姓名" disabled="disabled">
                                </div>
                            </div>
                            <div class="form-group from-show-notify row">
                                <div class="col-lg-4 col-md-3 col-sm-12 text-right">
                                    <label>手机号:</label>
                                </div>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <input type="text" class="form-control" id="mobile" placeholder="请输入手机号">
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
                                    <input type="text" class="form-control" id="card_no" placeholder="请输入身份证" disabled="disabled">
                                </div>
                            </div>
                            <div class="form-group from-show-notify row">
                                <div class="col-lg-4 col-md-3 col-sm-12 text-right">
                                    <label>通讯地址:</label>
                                </div>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <input type="text" class="form-control" id="address" placeholder="请输入通讯地址">
                                </div>
                            </div>
                            <div class="form-group from-show-notify row">
                                <div class="col-lg-4 col-md-3 col-sm-12 text-right">
                                    <label>邮编:</label>
                                </div>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <input type="text" class="form-control" id="zipcode" placeholder="请输入邮编">
                                </div>
                            </div>
                            <div class="form-group from-show-notify row">
                                <div class="col-lg-4 col-md-3 col-sm-12 text-right">
                                    <label>入学年份:</label>
                                </div>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <input type="text" class="form-control" id="enter_year" placeholder="入学年份" disabled="disabled">
                                </div>
                            </div>
                            <div class="form-group from-show-notify row">
                                <div class="col-lg-4 col-md-3 col-sm-12 text-right">
                                    <label>班级:</label>
                                </div>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <input type="text" class="form-control" id="notify_state" placeholder="班级" disabled="disabled">
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
                                    <button id="displayNotif" type="button" class="btn btn-success">保存修改</button>
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
>
<script src="../js/jquery.3.2.1.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="../js/ready.min.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
<script type="text/javascript" src="../js/edit.js"></script>
</body>

</html>