<?php
    include "../config";
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
    //page
    if( isset($_GET['page']) ){
        $page = $_GET['page'];
    }else{
        $page = 1;
    }

    try{
        $conn = connect();
    }catch(Exception $error){
        display_message($error->getMessage(),"","error");
        exit();
    }

    $PAGESIZE = 6; 
    $count = get_rows($conn);
    $pages = ceil($count / $PAGESIZE) ;

    $offset = $PAGESIZE*($page-1);
    
    $select = "select * from article order by id desc limit $offset,$PAGESIZE;";
    $result = $conn->query($select);
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
    <script type="text/javascript">
        function submitForm(action,id){
            document.getElementById('id').value = id;
            if(action === 'del'){
                document.getElementById('action').value = "del";
                document.getElementById('form').action = '../core.php';
            }else if(action === 'edit'){
                document.getElementById('action').value = 'edit';
                document.getElementById('form').action = './edit.php';
            }
            $('form').submit();
        }
    </script>
</head>
<body>
    <div class="container-fluid">
        <div class="row-fluid" style="margin-top:5%;">
            <div class="col-xs-6 span2">
                <ul class="nav nav-list">
                    <li class="nav-header">
                        monogatari后台管理
                    </li>
                    <li>
                        <a href="../index.php">首页</a>
                    </li>
                    <li>
                        <a href="./edit.php">新文章</a>
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
                <form id="form" action="" method="POST">
                    <input type="hidden" name="id" id="id" value="" />
                    <input type="hidden" name="action" id="action" value="" />
                </form>
<?php
    $i = 0;
    while( ($array = mysqli_fetch_row($result)) && $i<6){
        if($i%3 == 0){
            echo '
                <ul class="thumbnails">';
        }
        echo '
                    <li class="span4">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>
                                    '.$array[1].'
                                </h3>
                                <p>
                                    '.mb_substr($array[2],0,70,'utf8').'
                                </p>
                                <button class="btn btn-danger" onclick="submitForm(\'del\','.$array[0].')">delete</button>
                                <button class="btn btn-primary pull-right" onclick="submitForm(\'edit\','.$array[0].')">edit</button>
                            </div>
                        </div>
                    </li>';

        $i++;
        if($i%3 ==0 ){
            echo '
                </ul>';
        }
    }
?>              
            </div>
        </div>
        <div class="row-fluid">
            <div class="span2"></div> 
            <div class="span8">
                <div class="pagination pull-right">
                    <ul>
                        <li>
                            <a href=<?php echo './admin.php?page='.($page-1<=0 ? $page : $page-1);?>>上一页</a>
                        </li>
                        <li>
                            <a href=<?php echo './admin.php?page='.($page+1 > $pages ? $page : $page+1 );?>>下一页</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>