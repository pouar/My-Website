<?hh

if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
	$root='http://'.$_SERVER['HTTP_HOST'].'/pouar/';
}
else {
	$root='http://'.$_SERVER['HTTP_HOST'].'/pouar/';
}
echo "<rss version=\"2.0\"><channel><title>Pouar's Site Updates</title><description>what the title said</description><link>{$root}</link><image><url>{$root}marioskatehq4x.png</url><title>Pouar's Site</title><link>{$root}</link></image>";
$items = [
["2014-06-09 15:40", "Mon 9 Jun 2014 15:40:00 -0500", "publish"],
["2014-04-16 17:57", "Wed, 16 Apr 2014 17:57:00 -0500", "add Fav icon plus downloads"],
["2014-04-04 17:04", "Fri, 4 Apr 2014 17:04:00 -0500", "remove tabs and line feeds from output, the source files are in hack anyway"],
["2014-04-04 16:59", "Fri, 4 Apr 2014 16:59:00 -0500", "added news"],
["2014-04-01 21:29", "Tue, 1 Apr 2014 19:06:00 -0500", "initial setup"],
];
foreach($items as list($i, $j, $k))
{
	echo "<item><title>".$i."</title><pubDate>".$j."</pubDate><link>{$root}</link><description><![CDATA[".$k."]]></description></item>";
}
echo "</channel></rss>";
