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
<p><a href="/">Вернуться на josm.ru</a></p>
<p><a href="http://josm.openstreetmap.de/log/josm/?verbose=on">Список изменений на официальном сайте</a></p>
<? include('changes.php'); ?>
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