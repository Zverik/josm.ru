<? header("Content-Type: text/html; charset=utf-8"); ?>
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
<p>Самый распространённый редактор — <a href="http://wiki.openstreetmap.org/wiki/RU:JOSM/Guide">JOSM</a>, рекомендую сразу его поставить и забыть о браузерных правках. Начать не так просто, как в НЯК или викимапии, но достаточно очевидно:
<ol start="0">
<li>Запускаете JOSM.
<li>Нажимаете кнопку с зелёной стрелкой вниз и выбираете-скачиваете нужный участок карты (проверьте, чтобы галочки «данные» и «GPS-треки» были установлены).
<li>В меню «Снимки» выбираете подложку, обычно Bing или IRS. <a href="http://wiki.openstreetmap.org/wiki/RU:Using_Aerial_Imagery">Привязываете её к трекам</a>.
<li>«S» — выделить объект (точку, линию), «A» — добавить новый, справа есть панель тегов выбранного объекта.
<li>Полезно прочитать некоторые <a href="http://wiki.openstreetmap.org/wiki/RU:WikiProject_Russia">правила рисования в России</a> и держать под рукой <a href="http://wiki.openstreetmap.org/wiki/RU:Map_Features">список элементов карты</a> (поиск по странице ftw).
<li>Все вопросы можно задать в темах на форуме: <a href="http://forum.openstreetmap.org/viewtopic.php?id=10206">вопросы новичков</a> и <a href="http://forum.openstreetmap.org/viewtopic.php?id=2094">как обозначать</a>.
<li>Поправив район, нажимаете зелёную стрелку вверх, кратко описываете суть правок и «загрузить».
<li>Через 5-10 минут можно проверить на карте <a href="http://www.openstreetmap.org/">osm.org</a>, как оно нарисовалось.
</ol>
</td>
<td align="right" valign="top">
<a href="http://josm.openstreetmap.de/wiki/Ru%3AWikiStart"><img src="josm.png" alt="JOSM" border="0"></a><br>
<a href="http://josm.openstreetmap.de/josm-tested.jar">Загрузить стабильную версию 4064</a><br>
<a href="http://josm.openstreetmap.de/josm-latest.jar">или версию в разработке 4157</a><br>
<br>
<a href="http://java.com/ru/download/index.jsp">Java</a><br>
Установщики под <a href="http://josm.openstreetmap.de/download/windows/josm-setup.exe">Windows</a>, <a href="http://josm.openstreetmap.de/download/macosx/josm-macosx.zip">Mac OS X</a><br>
</td>
</tr>
<tr><td align="left" valign="top" style="padding-top: 2em;">
<p>Что изменилось:</p>
<table cellspacing="0" cellpadding="0" border="0">
<tr><td valign="top" style="padding-right: 8px;"><a href="http://josm.openstreetmap.de/changeset/4154/josm/">@4154</a><br><span class="changedate">21 июня</span></td>
<td valign="top">поправлена загрузка отсутствующих членов для новых отношений <a href="http://josm.openstreetmap.de/ticket/6414" class="fixedbug">#6414</a></td></tr>
<tr><td valign="top" style="padding-right: 8px;"><a href="http://josm.openstreetmap.de/changeset/4152/josm/">@4152</a><br><span class="changedate">19 июня</span></td>
<td valign="top">исправлено нарушение целостности данных при соединении узлов <a href="http://josm.openstreetmap.de/ticket/6414" class="fixedbug">#6217</a></td></tr>
</table>
</td></tr>
</table>
</div>
</td></tr></table>
</body>
</html>