<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>畅哲科技登陆</title>
    <link href="/Public/BJUI/themes/css/bootstrap.css" rel="stylesheet">
    <link href="/Public/my/css/login.css" rel="stylesheet">
<style>


</style>

</head>
<body>
<div class="container">

    <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">

        <div class="row">
            <div class="iconmelon">

            </div>
        </div>

        <div class="panel panel-default" >
            <div class="panel-heading">
                <div class="panel-title text-center">畅哲科技管理系统</div>
            </div>

            <div class="panel-body" >

                <form name="form" id="form" class="form-horizontal"  method="POST">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="user" type="text" class="form-control" name="username" value="" placeholder="用户名">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control" name="password" placeholder="密码">
                    </div>
                    <div class="form-group">

                        <!-- Button -->
                        <div class="col-sm-12 controls">
                            <span class="loginerr "><?php echo ($errorinfo); ?></span>
                            <button type="submit" href="#" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-log-in"></i> 进入</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>

<div id="particles"></div>

</body>
</html>