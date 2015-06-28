<?php
header("Content-Type: text/html; charset=utf-8");
$versions = @file_get_contents("version");
$tested = preg_match('/tested[\w .:]+(\d{4,5})/', $versions, $matches) ? $matches[1] : '0000';
$latest = preg_match('/latest[\w .:]+(\d{4,5})/', $versions, $matches) ? $matches[1] : '0000';
$user_agent = strtolower($_SERVER['HTTP_USER_AGENT']);
if( strpos($user_agent, 'win') !== false || strpos($user_agent, 'msie') !== false )
    $platform = 'windows';
elseif( strpos($user_agent, 'mac') !== false )
    $platform = 'mac';
else
    $platform = 'jar';
?>
<html>
<head>
<title>JOSM с самого начала</title>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="icon" href="/favicon.ico" type="image/x-icon" />
<meta name="description" content="Начните изучение OpenStreetMap с редактора JOSM! Свежая версия, видеоурок и полезные ссылки." />
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
#cards {
    list-style-type: none;
    margin: 0 0 50px;
    padding: 0;
    text-align: center;
}
#cards li {
    display: inline;
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

/* Redesign by BushmanK */

#header {
  height: 450px;
  padding: 100px 200px 0 0;
  position: relative;
  text-align: center;
}
#changelog {
  position: absolute;
  right: 0;
  top: 100px;
  width: 230px;
}
h1 {
  font-family: "PT Sans Caption","Verdana",sans-serif;
  font-size: 60px;
  font-weight: normal;
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
#downloads .stable {
  background-color: #4b6fc1;
  background-image: url("https://josm.openstreetmap.de/browser/trunk/images/logo.png?format=raw");
  background-position: 14px 10px;
  background-repeat: no-repeat;
  background-size: 47px auto;
  border-color: white;
  border-radius: 10px;
  border-style: solid;
  border-width: 3px;
  box-shadow: 1px 1px 5px black;
  color: white;
  font-weight: bold;
  margin-bottom: 15px;
  padding: 15px 25px 15px 72px;
}
#downloads a {
  display: inline-block;
}
a {
  color: #365faa;
  text-decoration: none;
}
a:hover, #tutorial a {
  text-decoration: underline;
}
#downloads .installers {
  font-size: 14px;
}
.installers a {
  background-color: #1da53f;
  border-color: white;
  border-radius: 5px;
  border-style: solid;
  border-width: 1px;
  box-shadow: 1px 1px 3px black;
  color: white;
  margin: 0 5px;
  padding: 5px 10px;
}
#downloads .latest {
  background-color: #90cea3;
  border: 1px dashed white;
  border-radius: 5px;
  box-shadow: 1px 1px 2px black;
  color: white;
  margin-top: 20px;
  padding: 3px 25px;
}
#cards a {
  background: white none repeat scroll 0 0;
  border: 1px solid lightgray;
  border-radius: 5px;
  display: inline-block;
  padding: 12pt 8pt;
  vertical-align: middle;
  width: 10em;
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
<?php $maxlines = 9; include('changes.php'); ?>
<a href="changelog.php">...</a>
</div>

<h1>Начните с <a href="http://josm.openstreetmap.de/wiki/Ru%3AWikiStart">JOSM</a>!</h1>
<div id="downloads">
<?php if ($platform == 'windows'): ?>
<a class="stable" href="http://gis-lab.info/programs/josm/windows/josm-setup.exe">Загрузить версию <?=$tested ?> для Windows</a>
<?php elseif ($platform == 'mac'): ?>
<a class="stable" href="http://gis-lab.info/programs/josm/macosx/josm-macosx.zip">Загрузить версию <?=$tested ?> для Mac OS X</a>
<?php else: ?>
<a class="stable" href="http://gis-lab.info/programs/josm/josm-tested.jar">Загрузить стабильную версию <?=$tested ?></a>
<?php endif ?>
<br>
<span class="installers">Установщики для <a href="http://gis-lab.info/programs/josm/windows/josm-setup.exe">Windows</a>
<a href="http://gis-lab.info/programs/josm/macosx/josm-macosx.zip">Mac OS X</a>
<a href="http://gis-lab.info/programs/josm/josm.jnlp">запустить в WebStart</a>
<a href="http://gis-lab.info/programs/josm/josm-tested.jar">скачать jar</a>
</span><br>
<a class="latest" href="http://josm.openstreetmap.de/josm-latest.jar">Версия в разработке <?=$latest ?></a>
</div>
</div>

<ul id="cards">
<li><a href="http://java.com/ru/download/index.jsp">Вам понадобится Java, тут установщик</a></li>
<li><a href="http://wiki.openstreetmap.org/wiki/RU:JOSM/Guide">Подробный слегка устаревший учебник</a></li>
<li><a href="http://wiki.openstreetmap.org/wiki/RU:JOSM/FAQ">Часто задаваемые вопросы</a></li>
<li><a href="http://wiki.openstreetmap.org/wiki/RU:Map_Features">Большой справочник по тегам</a></li>
<li><a href="http://wiki.openstreetmap.org/wiki/RU:ВикиПроект_Россия">Рекомендации для рисующих в России</a></li>
<li><a href="http://forum.openstreetmap.org/viewtopic.php?id=2714">Тема про JOSM на форуме</a></li>
</ul>

<div id="video">
<iframe style="width: 100%; max-width: 1280px; height: 720px;" src="//www.youtube.com/embed/t7UdJrX8nGM?vq=hd720&rel=0" frameborder="0" allowfullscreen></iframe>
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

<script>
    ChatraID = 'EMp5eXiTvRXes5Xsc';
    (function(d, w, c) {
        var n = d.getElementsByTagName('script')[0],
            s = d.createElement('script');
        w[c] = w[c] || function() {
                (w[c].q = w[c].q || []).push(arguments);
            };
        s.async = true;
        s.src = (d.location.protocol === 'https:' ? 'https:': 'http:')
                + '//chat.chatra.io/chatra.js';
        n.parentNode.insertBefore(s, n);
    })(document, window, 'Chatra');
</script>
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
