<?
header("Content-Type: text/html; charset=utf-8");
$versions = file_get_contents("version");
$tested = preg_match('/tested[\w .:]+(\d{4,5})/', $versions, $matches) ? $matches[1] : 'X3';
$latest = preg_match('/latest[\w .:]+(\d{4,5})/', $versions, $matches) ? $matches[1] : 'X3';
?>
<html>
<head>
<title>JOSM с самого начала</title>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="icon" href="/favicon.ico" type="image/x-icon" />
<style>
body, td, p {
	font-family: Arial, sans-serif;
	font-size: x-small;
}
.content {
	max-width: 1000px;
	align: center;
	margin: 1em 1em;
}
.changedate {
	font-size: xx-small;
	color: gray;
}
.fixedbug {
	text-decoration: line-through;
}
</style>
</head>
<body>
<table cellspacing="0" cellpadding="0" border="0" width="100%" height="80%"><tr><td align="center" valign="center">
<div class="content">
<table cellspacing="0" cellpadding="0" border="0" width="100%">
<tr>
<td align="left" valign="top" rowspan="2" style="padding-right: 2em;">
<? include("tutorial.html"); ?>
</td>
<td align="right" valign="top">
<a href="http://josm.openstreetmap.de/wiki/Ru%3AWikiStart"><img src="josm.png" alt="JOSM" border="0"></a><br>
<a href="http://josm.openstreetmap.de/josm-tested.jar">Загрузить стабильную версию <?=$tested ?></a><br>
<a href="http://josm.openstreetmap.de/josm-latest.jar">или версию в разработке <?=$latest ?></a><br>
<br>
<a href="http://java.com/ru/download/index.jsp">Java</a><br>
Установщики под <a href="http://josm.openstreetmap.de/download/windows/josm-setup.exe">Windows</a>, <a href="http://josm.openstreetmap.de/download/macosx/josm-macosx.zip">Mac OS X</a><br>
</td>
</tr>
<tr><td align="left" valign="top" style="padding-top: 2em;">
<p>Что изменилось:</p>
<table cellspacing="0" cellpadding="0" border="0">
<?
$months = array('января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря', '13');
foreach( file("changelog.txt") as $logline ) {
	if( preg_match('/^@(\d+),\s*(\d+)\.(\d+):\s*(.+?)\s*$/', $logline, $matches) ) {
		$id = $matches[1];
		$date = $matches[2].' '.$months[$matches[3]-1];
		$text = preg_replace('/#(\d+)/', '<a href="http://josm.openstreetmap.de/ticket/\1" class="fixedbug">\0</a>', $matches[4]);
		?>
<tr><td valign="top" style="padding-right: 8px;"><a href="http://josm.openstreetmap.de/changeset/<?=$id?>/josm/">@<?=$id?></a><br><span class="changedate"><?=$date?></span></td>
<td valign="top"><?=$text?></td></tr>
<?		
	}
}
?>
</table>
</td></tr>
</table>
</div>
</td></tr></table>
</body>
</html>