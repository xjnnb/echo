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
                <div class="container-fluid">
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
                                                <th scope="col">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input  select-all-checkbox" type="checkbox" data-select="checkbox" data-target=".task-select">
                                                            <span class="form-check-sign"></span>
                                                        </label>
                                                    </div>
                                                </th>
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

</body>

</html>