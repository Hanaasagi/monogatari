<?php
    include "../func.php";
    session_start();
    //登陆校验
    if( !isset($_SESSION['islogin']) || $_SESSION['islogin'] != true){
        header("location:./login.php");
        exit();
    }
    //注销
    if( isset($_GET['logout']) && $_GET['logout'] == true){
        session_destroy();
        header("location:./login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>monogatari</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-combined.min.css">
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <style style="text/css">
        body {
            background-image:url("../image/background.jpg");
            background-size: cover;
            background-repeat:no-repeat;
            background-attachment:fixed;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row-fluid" style="margin-top:5%">
            <div class="col-xs-6 span2">
                <ul class="nav nav-list">
                    <li class="nav-header">
                        monogatari后台管理
                    </li>
                    <li>
                        <a href="../index.php">首页</a>
                    </li>
                    <li>
                        <a href="#">新文章</a>
                    </li>
                    <li>
                        <a href="#">留言版</a>
                    </li>
                    <li>
                        <a href="./setting.php">设置</a>
                    </li>
                    <li class="divider">
                    </li>
                    <li>
                        <a href="./admin.php?logout=true">注销</a>
                    </li>
                </ul>
            </div>
            <div class="col-xs-6 span9">
                <ul class="thumbnails">
                    <li class="span4">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>
                                    缩略图标题
                                </h3>
                                <p>
                                    Bacon ipsum dolor sit amet doner ham leberkas short loin hamburger, flank drumstick corned beef. Doner meatball venison bresaola biltong chicken. Turkey bacon shoulder strip steak spare ribs tri-tip. Rump ground round strip steak kielbasa short loin t-bone. Biltong capicola corned beef, ribeye chuck andouille sausage ham hock turkey spare ribs beef tail sirloin shank.
                                </p>
                                <p>
                                    <a class="btn btn-danger " href="#">delete</a> <a class="btn btn-primary pull-right" href="#">edit</a>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="span4">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>
                                    缩略图标题
                                </h3>
                                <p>
                                    Bacon ipsum dolor sit amet doner ham leberkas short loin hamburger, flank drumstick corned beef. Doner meatball venison bresaola biltong chicken. Turkey bacon shoulder strip steak spare ribs tri-tip. Rump ground round strip steak kielbasa short loin t-bone. Biltong capicola corned beef, ribeye chuck andouille sausage ham hock turkey spare ribs beef tail sirloin shank.
                                </p>
                                <p>
                                    <a class="btn btn-danger " href="#">delete</a> <a class="btn btn-primary pull-right" href="#">edit</a>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="span4">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>
                                    缩略图标题
                                </h3>
                                <p>
                                    Bacon ipsum dolor sit amet doner ham leberkas short loin hamburger, flank drumstick corned beef. Doner meatball venison bresaola biltong chicken. Turkey bacon shoulder strip steak spare ribs tri-tip. Rump ground round strip steak kielbasa short loin t-bone. Biltong capicola corned beef, ribeye chuck andouille sausage ham hock turkey spare ribs beef tail sirloin shank.
                                </p>
                                <p>
                                    <a class="btn btn-danger " href="#">delete</a> <a class="btn btn-primary pull-right" href="#">edit</a>
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="thumbnails">
                    <li class="span4">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>
                                    缩略图标题
                                </h3>
                                <p>
                                    Bacon ipsum dolor sit amet doner ham leberkas short loin hamburger, flank drumstick corned beef. Doner meatball venison bresaola biltong chicken. Turkey bacon shoulder strip steak spare ribs tri-tip. Rump ground round strip steak kielbasa short loin t-bone. Biltong capicola corned beef, ribeye chuck andouille sausage ham hock turkey spare ribs beef tail sirloin shank.
                                </p>
                                <p>
                                    <a class="btn btn-danger " href="#">delete</a> <a class="btn btn-primary pull-right" href="#">edit</a>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="span4">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>
                                    缩略图标题
                                </h3>
                                <p>
                                    Bacon ipsum dolor sit amet doner ham leberkas short loin hamburger, flank drumstick corned beef. Doner meatball venison bresaola biltong chicken. Turkey bacon shoulder strip steak spare ribs tri-tip. Rump ground round strip steak kielbasa short loin t-bone. Biltong capicola corned beef, ribeye chuck andouille sausage ham hock turkey spare ribs beef tail sirloin shank.
                                </p>
                                <p>
                                    <a class="btn btn-primary pull-right" href="#">edit</a> <a class="btn btn-danger  " href="#">delete</a>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="span4">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>
                                    缩略图标题
                                </h3>
                                <p>
                                    Bacon ipsum dolor sit amet doner ham leberkas short loin hamburger, flank drumstick corned beef. Doner meatball venison bresaola biltong chicken. Turkey bacon shoulder strip steak spare ribs tri-tip. Rump ground round strip steak kielbasa short loin t-bone. Biltong capicola corned beef, ribeye chuck andouille sausage ham hock turkey spare ribs beef tail sirloin shank.
                                </p>
                                <p>
                                    <a class="btn btn-danger " href="#">delete</a> <a class="btn btn-primary pull-right" href="#">edit</a>
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>