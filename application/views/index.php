<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <base href="<?php  echo base_url()."static/";?>"/>
    <title>BETTA | home</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">
    <link href="css/music.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light">Chocolate</span> Factory
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>

                    <li>
                        <a class="page-scroll" href="<?php  echo base_url()."blog";?>">Blog</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#music">Music</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro" class="container content-section text-center">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">BETTA</h1>
                        <p class="intro-text">A Lonely Charming Indie Gamemaker
                        <br>Come On...Let's Go...</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <class="about-section">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Something about me</h2>
                    <p>When the Last of The Flock Falls, The Game is Over. Forever.
                    <p>I am a indie Gamemaker i am <a href="http://www.sqruo.com/">betta</a> I also like basketball. like music. like flim. like read and soon on...</p>
                    <p>Never give up. find the next boom in the world.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Music Section -->
    <section id="music" class="content-section text-center">
        <div class="music-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h1>music</h1>
                    <div class="back">
                        <div class="container1">
                            <div class="player">
                                <div id="cd" class="cd">
                                    <div class="out">
                                    </div>
                                    <div id="album" class="album"  onClick="javascript:m_play()">
                                    </div>
                                    <div id="in" class="in">
                                    </div>
                                </div>
                                <div class="info">
                                    <span id="music_name"></span><span id="artist"></span>
                                </div>
                                <div id="lrc" class="lrc">
                                </div>
                            </div>
                        </div>
                    </div>
                    <audio id="player">
                    </audio>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact Me</h2>
                <p>Indie games are changing the world, one giant pixel at a time. If you can. contact with me.
                <p>Let's go !</p>
                <p><a href="mailto:betta0801@gmail.com">betta0801@gmail.com</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="http://www.weibo.com/2306700572/" class="btn btn-default btn-lg"><i class="fa fa-weibo fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/LightStrawberry" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <div id="map">
    </div>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; betta 2015</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>
    <script src="js/player.js" type="text/javascript"></script>

</body>

</html>
