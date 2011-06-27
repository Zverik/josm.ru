<?
header("Content-Type: text/html; charset=utf-8");
if( isset($_REQUEST['pwd']) && $_REQUEST['pwd'] == 'Leaflet19' && isset($_REQUEST['log']) && strlen(trim($_REQUEST['pwd'])) > 0 ) {
	file_put_contents('changelog.txt', trim($_REQUEST['log']));
}
?>
<html>
<head>
<title>Редактор ченджлога JOSM</title>
</head>
<body onload="javascript:f.log.focus();">
<table cellpadding="0" cellspacing="0" width="100%" height="100%"><tr><td>
<form action="<?=$_SERVER['PHP_SELF'] ?>" method="post" name="f">
<textarea name="log" rows="12" cols="120">
<? readfile("changelog.txt"); ?>
</textarea><br>
<input type="text" size="15" name="pwd">
<input type="submit" value="Сохранить">
<a href="http://josm.openstreetmap.de/log/josm/?verbose=on">JOSM changelog</a>
<a href="http://josm.ru/">josm.ru</a>
</form>
</td></tr><tr><td style="height: 90%; padding-top: 1em;">
<iframe style="border: 1px solid gray; width: 100%; height: 100%;" src="http://josm.openstreetmap.de/log/josm/?verbose=on"></iframe>
</td></tr></table>
</body>
</html>