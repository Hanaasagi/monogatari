<?php
    include "../func.php";
    session_start();
    //登陆校验
    if( !isset($_SESSION['islogin']) || $_SESSION['islogin'] != true){
        header("location:./login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>setting</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-combined.min.css">
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <style style="text/css">
        body {
            background-image:url("../image/theme.png");
            background-size: cover;
            background-repeat:no-repeat;
            background-attachment:fixed;
        }
    </style>
</head>
<body>
<?php
    if( isset($_GET['success']) ){
        display_message("update success","","success");
    }else if( isset($_GET['failed']) ){
        display_message("update failed","","error");
    }
?>
    <div class="container-fluid">
        <div class="row-fluid">
                <h4><a href="./admin.php">Admin page</a></h4>
        </div>
        <div class="row-fluid" style="margin-top:10%">
            <div class="span2"></div>
            <div class="span6" style="color:#FFFFFF">
                <h3>个人信息修改</h3>
                <form class="form-horizontal" action="../core.php" method="POST">
                    <input type="hidden" name="action" value="updateSetting"> 
                    <div class="control-group">
                        <label class="control-label">nickname</label>
                        <div class="controls" >
                            <input name="nickname" style="height:26px" type="text" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">old password</label>
                        <div class="controls">
                            <input name="oldPassword"  style="height:26px"type="password" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">new password</label>
                        <div class="controls">
                            <input name="newPassword"  style="height:26px"type="password" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">confirm password</label>
                        <div class="controls">
                            <input name="confirmPassword"  style="height:26px"type="password" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">profile</label>
                        <div class="controls">
                             <textarea name="profile" rows="4" style="resize: none"></textarea>
                        </div>
                    </div>
                    <span class="help-block" style="font-style: italic">空白项则保持不变</span> 
                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" class="btn btn-primary active">update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>