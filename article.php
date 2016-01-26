<?php
    include "./config";
    include "./func.php";
    if( isset($_GET['id']) && is_num($_GET['id'])){
        $id = $_GET['id'];
    }else{
        exit();
    }

    try{
        $conn = connect();
    }catch(Exception $error){
        display_message($error->getMessage(),"","error");
        exit();
    }

    $nickname = get_nickname($conn);

    $select = "select title, content, date from article where `id` = '$id';";
    $result =$conn->query($select);
    $array = mysqli_fetch_row($result);
?>
<!DOCTYPE html>
<html>
<head>
    <title>monogatari</title>
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

        <div class="row-fluid">
            <div class="span2"></div>
            <div class="span8">
                <div class="hero-unit">
                    <h3><?php echo $array[0];?></h3>
                    <p>    
                        <?php echo $array[1];?>
                    </p>
                </div>
            </div>
        </div>

    </div>
</body>
</html>