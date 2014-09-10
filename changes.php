<table cellspacing="0" cellpadding="0" border="0">
<?php
$months = array('января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря', '13');
if( !isset($maxlines) )
	$maxlines = 100;

foreach( file("changelog.txt") as $logline ) {
	if( preg_match('/^@(\d+),\s*(\d+)\.(\d+):\s*(.+?)\s*$/', $logline, $matches) ) {
		$id = $matches[1];
		$date = $matches[2].'&nbsp;'.$months[$matches[3]-1];
		$text = $matches[4];
		$text = str_replace('&', '&amp;', $text);
		$text = str_replace('<', '&lt;', $text);
		$text = str_replace('>', '&gt;', $text);
		$text = preg_replace('/#(\d+)/', '<a href="http://josm.openstreetmap.de/ticket/\1" class="fixedbug">\0</a>', $text);
		?>
<tr><td valign="top" style="padding-right: 8px;"><a href="http://josm.openstreetmap.de/changeset/<?=$id?>/josm/">@<?=$id?></a><br><span class="changedate"><?=$date?></span></td>
<td valign="top"><?=$text?></td></tr>
<?php		if( --$maxlines <= 0 ) break;
	} elseif( preg_match('/^!(\d+),\s*(\d+)\.(\d+)\s*$/', $logline, $matches) ) {
		$id = $matches[1];
		$date = $matches[2].'&nbsp;'.$months[$matches[3]-1];
		?>
<tr><td valign="top" class="vstable" style="padding-right: 8px;"><b>@<?=$id?></b><br><span class="changedate"><?=$date?></span></td>
<td valign="top" class="vstable"><b>стабильная версия</b></td></tr>
<?php		if( --$maxlines <= 0 ) break;
	}
}
?>
</table>
