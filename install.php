<?php
//  install 
    error_reporting(E_ALL^E_NOTICE^E_WARNING);
    if( isset($_POST['nickname']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['dbaddress']) && isset($_POST['dbuser']) && isset($_POST['dbpassword']) ){
        $nickname = $_POST['nickname'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $DBADDRESS = $_POST['dbaddress'];
        $DBUSER = $_POST['dbuser'];
        $DBPASSWD = $_POST['dbpassword'];
        $profile = "这个人很懒，什么也没有留下……";

        $conn = new mysqli($DBADDRESS, $DBUSER, $DBPASSWD);
        if ( $conn->connect_error) {
            //  ???异常处理
            $error_message = "无法连接数据库";
        }else{
            //设置编码
            $conn->query("set names utf8");
            $create_db = "create database `monogatari` character set utf8 collate utf8_general_ci;";
            if( ! $conn->query($create_db)){
                $error_message = "无法创建数据库";
            }
            $conn->select_db("monogatari");

            $create_table = "create table `master` ( `nickname` varchar(32),`username` varchar(32), `password` varchar(32) ,`profile` text)DEFAULT CHARSET=utf8;";
            $conn->query($create_table);

            $create_table = "create table `article` ( `id` int not null primary key auto_increment,`title` varchar(128) ,`content` text , `date` timestamp default current_timestamp)DEFAULT CHARSET=utf8;";
            $conn->query($create_table);

            $insert_info = "insert into master (`nickname`,`username`,`password`,`profile`) values ('$nickname','$username','$password','$profile');";
            $conn->query($insert_info);

            $conn->close();

            // 写入配置文件
            $content = '<?php 
    error_reporting(E_ALL^E_NOTICE^E_WARNING);
    $DBADDRESS = "'.$DBADDRESS.'";
    $DBUSER = "'.$DBUSER.'";
    $DBPASSWD = "'.$DBPASSWD.'";
?>';
            file_put_contents("./config",$content);
            //跳转至登陆页面
            header("location:./admin/login.php");
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>install monogatari</title>
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
    </style>
</head>
<body>
    <?php
    //显示错误信息
        if( isset($error_message) ){
            echo '<div class="alert alert-error">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <h4>警告!</h4>'.$error_message.'</div>';
        }    
    ?>
    <div class="container-fluid">
        <div class="row-fluid" style="margin-top:10%">
            <div class="span2"></div>
            <div class="span6" style="color:#FFFFFF">
                <h3>INSTALL</h3>
                <form class="form-horizontal" action="" method="POST">
                    <div class="control-group">
                        <label class="control-label">nickname</label>
                        <div class="controls" >
                            <input name="nickname" style="height:26px" type="text" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">username</label>
                        <div class="controls" >
                            <input name="username" style="height:26px" type="text" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">password</label>
                        <div class="controls">
                            <input name="password"  style="height:26px"type="password" />
                        </div>
                    </div>
                    <!-- <div class="control-group">
                        <label class="control-label">confirm password</label>
                        <div class="controls">
                            <input name="cpassword" style="height:26px" type="password" />
                        </div>
                    </div> -->
                    <div class="control-group">
                        <label class="control-label">DBaddress</label>
                        <div class="controls">
                            <input name="dbaddress" style="height:26px" type="text" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">DBuser</label>
                        <div class="controls">
                            <input name="dbuser" style="height:26px" type="text" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">DBpassword</label>
                        <div class="controls">
                            <input name="dbpassword" style="height:26px" type="password" />
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" class="btn btn-primary active">install</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- 分割线 底部固定-->
        <ul class="nav nav-list navbar-fixed-bottom">
            <li class="divider"></li>
            <p class="pull-right">powered by Qsaka</p>
        </ul>
    </div>
</body>
</html>