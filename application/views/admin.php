<html>

	<head>
		<title>躺着睡觉</title>
		<base href="<?php  echo base_url();?>">
		<link href="static/css/admin.css" rel="stylesheet">
	</head>
	<body>
		<div id="wrapper">
			<a href="Admin/create">新建文章</a>
			<p>文章：</p>
			<?php foreach ($all_list as $row):?>
				<p>标题：<?php echo $row->title;?></p>
				<p>时间：<?php echo $row->time;?></p>
				<a href="Admin/delete_article/<?php echo $row->id;?>">删除</a>
				<a href="Admin/update/<?php echo $row->id;?>">更新</a>
				<br/>
			<?php endforeach ?>
	</div>
	</body>
</html>