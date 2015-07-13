<html>

	<head>
		<title>萌萌的后台</title>
	</head>
	<body>
		<form action="Admin/create_article" method="post" id="article">
			title:<input type="text" name="title"><br />
			<input type="submit" value="提交">
		</form>
		content:<textarea rows="10" cols="30" form="article" name="content"></textarea><br/>
	</body>
</html>