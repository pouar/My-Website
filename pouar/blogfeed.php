<?hh
if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
	$root='http://'.$_SERVER['HTTP_HOST'].'/pouar/';
}
else {
	$root='http://'.$_SERVER['HTTP_HOST'].'/pouar/';
}
echo "<rss version=\"2.0\"><channel><title>Pouar's Blog</title><description>what the title said</description><link>{$root}</link><image><url>{$root}marioskatehq4x.png</url><title>Pouar's Site</title><link>{$root}</link></image>";
$items = [
["2014-06-17 19:39", "Tue, 17 Jun 2014 19:39:00 -0500", "About time I made use of this. For my first post I wanted to mention an illumos distro called <a href=http://sonicle.com/index.jsp?pagename=xstreamos&parent=products>XStreamOS</a>, which has given me new hope in the post-sun world of Solaris. XStreamOS is made by Sonicle, who seems to be focused in web development and infrastructure. They said they've delivered solutions for clients on Solaris 8 9 &amp; 10, and when Oracle bought out Sun they decided to make their own OS based off of illumos. Anyway I tried out the XStream Desktop which seems to be based off of LXDE, which is an awesone desktop environment by the way. The XStream"],
];
foreach($items as list($i, $j, $k))
{
	echo "<item><title>".$i."</title><pubDate>".$j."</pubDate><link>{$root}</link><description><![CDATA[".$k."]]></description></item>";
}
echo "</channel></rss>";
