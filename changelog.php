<? header("Content-Type: text/html; charset=utf-8"); ?>
<html>
<head>
<title>Список изменений в JOSM</title>
<style>
body, td, p {
	font-family: Arial, sans-serif;
	font-size: 10pt;
}
.changedate {
	font-size: 8pt;
	color: gray;
}
.fixedbug {
	text-decoration: line-through;
}
</style>
</head>
<body>
<? include('changes.php'); ?>
<p><a href="/">Вернуться на josm.ru</a></p>
</body>
</html>