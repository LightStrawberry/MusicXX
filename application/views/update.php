<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>琢磨文字呢！</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <base href="<?php  echo base_url();?>">


    <link media="all" rel="stylesheet" type="text/css" href="static/css/create.css" />
    <link media="all" rel="stylesheet" type="text/css" href="static/css/simditor.css" />

    <script type="text/javascript" src="static/js/jquery.min.js"></script>
</head>
<body>

<div class="wrapper">
    
<header>
	<h1><a href="."></a></h1>
	<p class="desc">可以用MARKDOWM哦</p>
</header>
<form action="Admin/update_article/<?php echo $artArr['id'];?>" method="post" id="article">
    <h1>标题：</h1><input type="text" name="title" value="<?php echo $artArr['title'];?>"><br />
    <h3>副标题：</h3><input type="text" name="subheading" value="<?php echo $artArr['subheading'];?>"><br />
    <section id="page-demo">
    <textarea id="editor" data-autosave="editor-content" autofocus name="content">
        <?php echo $artArr['content'];?>
    </textarea>
    </section>
    <input type="submit" value="提交">
</form>

<script type="text/javascript" src="static/js/jquery.min.js"></script>
<script type="text/javascript" src="static/js/module.js"></script>
<script type="text/javascript" src="static/js/hotkeys.js"></script>
<script type="text/javascript" src="static/js/uploader.js"></script>
<script type="text/javascript" src="static/js/simditor.js"></script>
<script type="text/javascript" src="static/js/text.js"></script>
    
<footer>
	&copy; <a href="http://sqruo.com">Betta</a>
</footer>
</div>


</body>
</html>

