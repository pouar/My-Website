<?hh
$root='http://'.$_SERVER['HTTP_HOST'].'/pouar/';
echo "<rss version=\"2.0\"><channel><title>Pouar's Blog</title><description>what the title said</description><link>{$root}</link><image><url>{$root}marioskatehq4x.png</url><title>Pouar's Site</title><link>{$root}</link></image>";
$items = [
["2014-04-16 17:57", "Wed, 16 Apr 2014 17:57:00 -0500", ""],
];
foreach($items as list($i, $j, $k))
{
	echo "<item><title>".$i."</title><pubDate>".$j."</pubDate><link>{$root}</link><description><![CDATA[".$k."]]></description></item>";
}
echo "</channel></rss>";
