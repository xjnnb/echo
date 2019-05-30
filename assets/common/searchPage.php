<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->

    <title>校友管理系统</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/ready.css">
    <link rel="stylesheet" href="../css/demo.css">
    <link rel="stylesheet" href="../css/search.css" type="text/css">
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
                            <form action="" method="post">
                                <div class="card">
                                    <div class="card-body">
                                        <ul class="breadcrumb">
                                            <li><a href="../common/mainPage.php">首页</a></li>
                                            <li class="active">新增人员</li>
                                        </ul>
                                        <div class="form-group from-show-notify row">
                                            <div class="col-lg-1 col-md-1 col-sm-4 text-right">
                                                <label>State</label>
                                            </div>
                                            <div class="col-lg-5 col-md-6 col-sm-4">
                                                <select class="form-control input-fixed" id="seltype">

                                                    <option value ="name">姓名</option>
                                                    <option value="year">入学年份</option>
                                                    <option value="class">班级</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4 col-md-5 col-sm-4 text-right">
                                                <input type="text" placeholder="Search ..." class="form-control text-right" id="searchText">
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-4">
                                                <button type="button"  class="btn btn-primary" id="searchBt">Go</button>
                                            </div>
                                        </div>
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

<script src="../js/jquery.3.2.1.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="../js/ready.min.js"></script>
<script type="text/javascript" src="../js/search.js"></script>

</body>

</html>