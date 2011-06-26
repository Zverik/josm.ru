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
	font-size: 10pt;
}
.content {
	max-width: 1000px;
	align: center;
}
.changedate {
	font-size: 8pt;
	color: gray;
}
.fixedbug {
	text-decoration: line-through;
}
h1 {
	font-size: 18pt;
	font-weight: normal;
}
</style>
</head>
<body>
<table cellspacing="0" cellpadding="0" border="0" width="100%"><tr><td align="center">
<table cellspacing="0" cellpadding="0" border="0" width="100%" class="content">
<tr><td colspan="2" align="center" style="padding-bottom: 2em; padding-top: 2em;">
<a href="http://josm.openstreetmap.de/wiki/Ru%3AWikiStart"><img src="josm.png" alt="JOSM" border="0"></a><br>
<h1>Начните с JOSM!</h1>
</td></tr>
<tr>
<td align="left" valign="top" rowspan="2" style="padding-right: 2em; width: 70%;">
<? include("tutorial.html"); ?>
</td>
<td align="right" valign="top">
<a href="http://gis-lab.info/programs/josm/josm-tested.jar">Загрузить стабильную версию <?=$tested ?></a><br>
<a href="http://josm.openstreetmap.de/josm-latest.jar">или версию в разработке <?=$latest ?></a><br>
<br>
Установщики под <a href="http://gis-lab.info/programs/josm/windows/josm-setup.exe">Windows</a>, <a href="http://gis-lab.info/programs/josm/macosx/josm-macosx.zip">Mac OS X</a><br>
<a href="http://gis-lab.info/programs/josm/josm.jnlp">Запустить</a> прямо сразу (через Java WebStart)
</td>
</tr>
<tr><td align="left" valign="bottom" style="padding-top: 2em;">
<p>Что изменилось:</p>
<? $maxlines = 7; include('changes.php'); ?>
<a href="changelog.php">...</a>
</td></tr>
</table>
</td></tr></table>
</body>
</html>