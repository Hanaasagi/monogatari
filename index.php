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
                        <small>Qsaka</small>
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
        <!-- 文章内容  暂定一页显示5条记录-->
        <!-- 第一篇 -->
        <div class="row-fluid">
            <div class="span2"></div>
            <div class="span8">
                <div class="hero-unit">
                    <h3>Ruby大法好</h3>
                    <p>    
                        Ruby的变量有一定的规则，以$开头的一定是全局变量，以@开头的都是实例变量，而以@@开头的是类变量。常数则以大写字母开头；这种方法，对文本编辑器的命令补全很有帮助，如在vim下先键入$及开头字母，再敲击Ctrl+p，则可专门补全本文件以及关联文件中的全局变量，perl与php亦有此优点。
                    </p>
                    <p>
                         <a class="btn btn-primary pull-right" href="#">Read More »</a>
                    </p>
                </div>

            </div>
        </div>
        <!-- 第二篇 -->
        <div class="row-fluid">
            <div class="span2"></div>
            <div class="span8">
                <div class="hero-unit">
                    <h2>python保平安</h2>
                    <p>    
                        首先，我们普及一下编程语言的基础知识。用任何编程语言来开发程序，都是为了让计算机干活，比如下载一个MP3，编写一个文档等等，而计算机干活的CPU只认识机器指令，所以，尽管不同的编程语言差异极大，最后都得“翻译”成CPU可以执行的机器指令。而不同的编程语言，干同一个活，编写的代码量，差距也很大。
                        比如，完成同一个任务，C语言要写1000行代码，Java只需要写100行，而Python可能只要20行。所以Python是一种相当高级的语言。
                    </p>
                    <p>
                        <a class="btn btn-primary pull-right" href="#">Read More »</a>
                    </p>
                </div>

            </div>
        </div>
        <!-- 第三篇 -->
        <div class="row-fluid">
            <div class="span2"></div>
            <div class="span8">
                <div class="hero-unit">
                    <h2>Ruby大法好</h2>
                    <p>    
                        Ruby的变量有一定的规则，以$开头的一定是全局变量，以@开头的都是实例变量，而以@@开头的是类变量。常数则以大写字母开头；这种方法，对文本编辑器的命令补全很有帮助，如在vim下先键入$及开头字母，再敲击Ctrl+p，则可专门补全本文件以及关联文件中的全局变量，perl与php亦有此优点。
                    </p>
                    <p>
                         <a class="btn btn-primary pull-right" href="#">Read More »</a>
                    </p>
                </div>

            </div>
        </div>
        <!-- 第四篇 -->
        <div class="row-fluid">
            <div class="span2"></div>
            <div class="span8">
                <div class="hero-unit">
                    <h2>python保平安</h2>
                    <p>    
                        首先，我们普及一下编程语言的基础知识。用任何编程语言来开发程序，都是为了让计算机干活，比如下载一个MP3，编写一个文档等等，而计算机干活的CPU只认识机器指令，所以，尽管不同的编程语言差异极大，最后都得“翻译”成CPU可以执行的机器指令。而不同的编程语言，干同一个活，编写的代码量，差距也很大。
                        比如，完成同一个任务，C语言要写1000行代码，Java只需要写100行，而Python可能只要20行。所以Python是一种相当高级的语言。
                    </p>
                    <p>
                        <a class="btn btn-primary pull-right" href="#">Read More »</a>
                    </p>
                </div>

            </div>
        </div>
        <!-- 第五篇 -->
        <div class="row-fluid">
            <div class="span2"></div>
            <div class="span8">
                <div class="hero-unit">
                    <h2>python保平安</h2>
                    <p>    
                        首先，我们普及一下编程语言的基础知识。用任何编程语言来开发程序，都是为了让计算机干活，比如下载一个MP3，编写一个文档等等，而计算机干活的CPU只认识机器指令，所以，尽管不同的编程语言差异极大，最后都得“翻译”成CPU可以执行的机器指令。而不同的编程语言，干同一个活，编写的代码量，差距也很大。
                        比如，完成同一个任务，C语言要写1000行代码，Java只需要写100行，而Python可能只要20行。所以Python是一种相当高级的语言。
                    </p>
                    <p>
                        <a class="btn btn-primary pull-right" href="#">Read More »</a>
                    </p>
                </div>

            </div>
        </div>
        <!-- 文章部分 结束 -->

        <!-- 分页 -->
        <div class="row-fluid">
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
        </div>
        <ul class="nav nav-list">
            <li class="divider"></li>
            <p class="pull-right">powered by Qsaka</p>
        </ul>
    </div>
</body>
</html>




  