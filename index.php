<?
header("Content-Type: text/html; charset=utf-8");
$versions = file_get_contents("version");
$tested = preg_match('/tested[\w .:]+(\d{4,5})/', $versions, $matches) ? $matches[1] : '';
$latest = preg_match('/latest[\w .:]+(\d{4,5})/', $versions, $matches) ? $matches[1] : '';
?>
<html>
<head>
<title>JOSM с самого начала</title>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="icon" href="/favicon.ico" type="image/x-icon" />
<meta name="description" content="Начните изучение OpenStreetMap с редактора JOSM!" />
<meta property="og:image" content="http://josm.ru/josm.png" />
<link rel="image_src" href="http://josm.ru/josm.png">
<style>
body, td, p {
	font-family: Arial, sans-serif;
	font-size: 10pt;
}
body {
	margin: 20px 20px;
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
.download {
	font-weight: bold;
	font-size: 11pt;
}
.socialbuttons {
	padding-top: 3em;
	text-align: center;
	vertical-align: top;
}
.google1 {
	display: inline-block;
	height: 20px;
	overflow: hidden;
}
</style>
<script type="text/javascript" src="http://userapi.com/js/api/openapi.js?32"></script>
<script type="text/javascript">
  VK.init({apiId: 2396234, onlyWidgets: true});
</script>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
  {lang: 'ru'}
</script>
</head>
<body>
<table cellspacing="0" cellpadding="0" border="0" width="100%"><tr><td align="center">
<table cellspacing="0" cellpadding="0" border="0" width="100%" class="content">
<tr><td colspan="2" align="center" style="padding-bottom: 2em; padding-top: 1em;">
<a href="http://josm.openstreetmap.de/wiki/Ru%3AWikiStart"><img src="josm.png" alt="JOSM" border="0"></a><br>
<h1>Начните с JOSM!</h1>
</td></tr>
<tr>
<td align="left" valign="top" rowspan="2" style="padding-right: 2em; width: 70%;">
<? include("tutorial.html"); ?>
</td>
<td align="right" valign="top">
<span class="download"><a href="http://gis-lab.info/programs/josm/josm-tested.jar">Загрузить стабильную версию <?=$tested ?></a><br>
или <a href="http://josm.openstreetmap.de/josm-latest.jar">версию в разработке <?=$latest ?></a></span><br>
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
<div class="socialbuttons">
<div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><div class="google1"><fb:like href="http://josm.ru" send="false" layout="button_count" show_faces="false"></fb:like></div>
<a href="http://twitter.com/share" class="twitter-share-button" data-text="JOSM FTW!" data-url="http://josm.ru" data-count="horizontal">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
<div class="google1"><g:plusone size="medium"></g:plusone></div>
<div id="vk_like" style="display: inline;"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "mini"});
</script>
</div>
</td></tr></table>
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ? "https://piwik.textual.ru/" : "http://piwik.textual.ru/");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
try {
var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 1);
piwikTracker.trackPageView();
piwikTracker.enableLinkTracking();
} catch( err ) {}
</script><noscript><p><img src="http://piwik.textual.ru/piwik.php?idsite=1" style="border:0" alt="" /></p></noscript>
</body>
</html>