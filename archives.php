<?php
    include "./config";
    include "./func.php";

    try{
        $conn = connect();
    }catch(Exception $error){
        display_message($error->getMessage(),"","error");
        exit();
    }

    $nickname = get_nickname($conn);
    $count = get_rows($conn);
    $select = "select * from article;";
    $result = $conn->query($select);

?>
<!DOCTYPE html>
<html>
<head>
    <title>归档</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-combined.min.css">
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style type="text/css">
        body {
            background-image:url("image/theme.png");
            background-size: cover;
            background-repeat:no-repeat;
            background-attachment:fixed;
        }
        .hero-unit{
            font-weight: normal;
        }
        .jumbotron {
            background:url("image/banner.jpg");
            background-position: 50% 60%;
            background-size: cover;
            box-shadow: 0 0px 30px rgba(0, 0, 0, 0.36) inset;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span2"></div>
            <div class="span8">
                <div class="header">
                    <ul class="nav nav-pills pull-right">
                        <li>
                            <a href="./index.php">主页</a>
                        </li>
                        <li>
                            <a href="./archives.php">归档</a>
                        </li>
                        <li>
                            <a href="./about.php">about me</a>
                        </li>
                    </ul>
                    <h4 class="text-muted">
                        <small><?php echo $nickname;?></small>
                    </h4>
                </div>
                <div class="jumbotron">
                    <p class="lead pull-middle"> 
                        我們所度過的每個平凡の日常
                    </p>
                    <div class="span12"></div>
                    <div class="span1"></div>
                    <h2>
                        也許就是連續發生的奇跡 
                    </h2>
                </div>
            </div>
        </div>
        <!-- 列表显示 -->
<?php 
    $i=0;
    while ( $array = mysqli_fetch_row($result) ) {
        if($i%3 == 0){
            echo '
        <div class="row-fluid">
            <div class="span2"></div>
            <div class="col-xs-6 span8">
                <ul class="thumbnails">';
        }
        echo '
                    <li class="span4">
                        <div class="thumbnail">
                            <div class="caption">
                                <h4>
                                     '.$array[1].'
                                </h4>
                                <p>
                                    '.mb_substr($array[2],0,12,'utf8').'
                                </p>
                                <p>
                                    <a class="btn btn-link btn-xs" href="./article.php?id='.$array[0].'">Read More »</a> 
                                </p>
                            </div>
                        </div>
                    </li>';
                    $i++;
        if($i%3 == 0 || $i==$count){
            echo '
                </ul> 
            </div>
        </div>';
        }
        
    }

?>
<!--         <div class="row-fluid">
            <div class="span2"></div>
            <div class="span8">
                <ul class="thumbnails">
                    <li class="span4">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>
                                    缩略图标题
                                </h3>
                                <p>
                                    Bacon ipsum dolor sit amet doner ham leberkas short loin hamburger
                                </p>
                                <p>
                                    <a class="btn btn-link" href="#">Read More »</a> 
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
                                    Bacon ipsum dolor sit amet doner ham leberkas short loin hamburger
                                </p>
                                <p>
                                    <a class="btn btn-link" href="#">Read More »</a> 
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
                                    Bacon ipsum dolor sit amet doner ham leberkas short loin hamburger
                                </p>
                                <p>
                                    <a class="btn btn-link" href="#">Read More »</a> 
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
                                    Bacon ipsum dolor sit amet doner ham leberkas short loin hamburger
                                </p>
                                <p>
                                    <a class="btn btn-link" href="#">Read More »</a> 
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
                                    Bacon ipsum dolor sit amet doner ham leberkas short loin hamburger
                                </p>
                                <p>
                                    <a class="btn btn-link" href="#">Read More »</a> 
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="span2">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>
                                    缩略图标题
                                </h3>
                                <p>
                                    Bacon ipsum dolor sit amet doner ham leberkas short loin hamburger
                                </p>
                                <p>
                                    <a class="btn btn-primary" href="#">Read More »</a> 
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="span2">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>
                                    缩略图标题
                                </h3>
                                <p>
                                    Bacon ipsum dolor sit amet doner ham leberkas short loin hamburger
                                </p>
                                <p>
                                    <a class="btn btn-primary" href="#">Read More »</a> 
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="span2">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>
                                    缩略图标题
                                </h3>
                                <p>
                                    Bacon ipsum dolor sit amet doner ham leberkas short loin hamburger
                                </p>
                                <p>
                                    <a class="btn btn-primary" href="#">Read More »</a> 
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="span2">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>
                                    缩略图标题
                                </h3>
                                <p>
                                    Bacon ipsum dolor sit amet doner ham leberkas short loin hamburger
                                </p>
                                <p>
                                    <a class="btn btn-primary" href="#">Read More »</a> 
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="span2">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>
                                    缩略图标题
                                </h3>
                                <p>
                                    Bacon ipsum dolor sit amet doner ham leberkas short loin hamburger
                                </p>
                                <p>
                                    <a class="btn btn-link btn-sm" href="#">Read More »</a> 
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div> -->
            <div class="span2"></div>
        </div>
        <ul class="nav nav-list">
            <li class="divider"></li>
            <p class="pull-right">powered by Qsaka</p>
        </ul>
        <!-- 分页 暂时不要 -->
        <!-- <div class="row-fluid">
            <div class="span5"></div> 
            <div class="pagination pagination-centered">
                <ul>
                    <li>
                        <a href="#">上一页</a>
                    </li>
                    <li>
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">下一页</a>
                    </li>
                </ul>
            </div> 
        </div> -->
    </div>
</body>
</html>




  