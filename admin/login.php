<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/form-elements.css">
    <link rel="stylesheet" href="../css/style.css">
    <!-- Javascript -->
    <script src="../js/jquery-1.11.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.backstretch.min.js"></script>
    <script src="../js/scripts.js"></script>
    <style type="text/css">
        body {
                background-image:url("../image/theme.png");
                background-size: cover;
                background-repeat:no-repeat;
                background-attachment:fixed;
            }
    </style>
</head>
<body>
    <div class="top-content">
        <div class="inner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>登陆</h3>
                                <p>Enter your username and password to log on:</p>
                            </div>
                            <div class="form-top-right">
                                <!-- 头像 -->
                                <img class="img-rounded" src="image/avatar.jpg" />
                            </div>
                        </div>
                        <div class="form-bottom">
                             <form role="form" action="" method="post" class="login-form">
                                 <div class="form-group">
                                    <label class="sr-only" for="form-username">Username</label>
                                    <input type="text" name="form-username" placeholder="Username..." class="form-username form-control" id="form-username">
                                 </div>
                                 <div class="form-group">
                                    <label class="sr-only" for="form-password">Password</label>
                                    <input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
                                 </div>
                                 <button type="submit" class="btn">Sign in!</button>
                             </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
    </div>
</body>

