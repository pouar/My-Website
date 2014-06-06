<?hh
echo '<!doctype html><html><head><title>Blog</title>';
include_once "boilerplatetop.php";
$news = new SimpleXMLElement($root."blogfeed.php",null,true);
echo "<div id=news style=\"position:relative;margin:50px;\"><h3 style=\"display:inline\">".$news->channel->title."</h3><a href=blogfeed.php style=\"display:inline;right:0px;position:absolute;\"><img src=Rss-icon.png></a><hr>".php_uname();
for($i=0;$i<5;$i++)
{
	echo "<h4>".$news->channel->item[$i]->title."</h4><br>".$news->channel->item[$i]->description."<br>";
}
echo "</div>";
include_once "boilerplatebot.php";
