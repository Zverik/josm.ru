<?php
header("Content-Type: text/html; charset=utf-8");
$versions = @file_get_contents("version");
$tested = preg_match('/tested[\w .:]+(\d{4,5})/', $versions, $matches) ? $matches[1] : '0000';
$latest = preg_match('/latest[\w .:]+(\d{4,5})/', $versions, $matches) ? $matches[1] : '0000';
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
	font-family: "PT Sans", "Helvetica", sans-serif;
	font-size: 14px;
}
body {
	margin: 20px 20px;
	background-color: #eeeeee;
}
#header {
	text-align: center;
	padding: 100px 0;
	height: 400px;
}
#changelog {
	float: right;
	width: 230px;
}
#changelog td {
	font-size: 12px;
	line-height: 1.1;
}
.changedate {
	font-size: 10px;
	color: gray;
}
.fixedbug {
	text-decoration: line-through;
}
.vstable {
	background-color: #FFFEC5;
}
h1 {
	font-size: 60px;
	font-weight: normal;
	font-family: "PT Sans Caption", "Verdana", sans-serif;
	margin: 0 0 70px;
}
h1 a {
	color: inherit;
	text-decoration: none;
}
#downloads {
	font-size: 24px;
	line-height: 1.5;
}
#downloads a {
	display: inline-block;
	margin-bottom: 4px;
	color: blue;
}
#downloads .stable {
	background-color: blue;
	color: white;
	font-weight: bold;
	padding: 2px 10px;
}
#downloads .installers {
	font-size: 14px;
}
#video {
	text-align: center;
}
#tutorial {
	width: 800px;
	margin: 0 auto;
	padding-top: 100px;
}
#social {
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

<div id="header">
<div id="changelog">
<p>Что изменилось:</p>
<?php $maxlines = 7; include('changes.php'); ?>
<a href="changelog.php">...</a>
</div>

<h1>Начните с <a href="http://josm.openstreetmap.de/wiki/Ru%3AWikiStart">JOSM</a>!</h1>
<div id="downloads">
<a class="stable" href="http://gis-lab.info/programs/josm/josm-tested.jar">Загрузить стабильную версию <?=$tested ?></a><br>
<span class="installers">Установщики для <a href="http://gis-lab.info/programs/josm/windows/josm-setup.exe">Windows</a>,
<a href="http://gis-lab.info/programs/josm/macosx/josm-macosx.zip">Mac OS X</a>;
<a href="http://gis-lab.info/programs/josm/josm.jnlp">запустить в WebStart</a></span><br>
<a href="http://josm.openstreetmap.de/josm-latest.jar">Версия в разработке <?=$latest ?></a>
</div>
</div>

<div id="video">
<iframe style="width: 100%; max-width: 1280px; height: 720px;" src="//www.youtube.com/embed/t7UdJrX8nGM?vq=hd720&rel=0" frameborder="0" allowfullscreen></iframe>
</div>

<div id="tutorial">
<?php include("tutorial.html"); ?>
</div>

<div id="social">
<div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><div class="google1"><fb:like href="http://josm.ru" send="false" layout="button_count" show_faces="false"></fb:like></div>
<a href="http://twitter.com/share" class="twitter-share-button" data-text="JOSM FTW!" data-url="http://josm.ru" data-count="horizontal">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
<div class="google1"><g:plusone size="medium"></g:plusone></div>
<div id="vk_like" style="display: inline;"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "mini"});
</script>
</div>

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
