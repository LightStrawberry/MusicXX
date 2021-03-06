<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Betta | Blog</title>
    <base href="<?php  echo base_url();?>"/>
    <!-- Bootstrap Core CSS -->
    <link href="static/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="static/css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">BETTA</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php echo base_url();?>">堂室</a>
                    </li>
                    <li>
                        <a href="about.html">里房</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()."blog";?>">书屋</a>
                    </li>
                    <li>
                        <a href="contact.html">床尾</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('static/img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>解忧杂货店</h1>
                        <hr class="small">
                        <span class="subheading">写录下来，你就懂了。</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?php foreach ($list as $row):?>
                <div class="post-preview">
                    <a href="<?php echo 'blog/posts/'.$row['id'];?>"
                        <h2 class="post-title">
                            <?php echo $row['title'];?>
                        </h2>
                        <h3 class="post-subtitle">
                            <?php echo mb_substr($row['content'],0,64,'utf-8')."...";?>
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">betta</a> on <?php echo $row['time'];?></p>
                </div>
                <hr>
                <?php endforeach ?>
                <!-- Pager -->
                <ul class="pager">
                    <li class="last">
                        <a href="blog/page/<?php echo $Lastid;?>" style="float: left;">前卷</a>
                    </li>
                    <li class="next">
                        <a href="blog/page/<?php echo $Nextid;?>">后文</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="http://steamcommunity.com/profiles/76561198105752865/">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-steam fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.weibo.com/2306700572/">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-weibo fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/LightStrawberry">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; sqruo.com 2015</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="static/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="static/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="static/js/clean-blog.min.js"></script>

</body>

</html>
