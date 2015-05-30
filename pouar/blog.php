<?php
echo '<!doctype html><html><head><title>Blog</title>';
include_once "boilerplatetop.php";
ob_start();
if(empty($_GET['page']) && empty($_GET['index']))
{
	include 'blogfeed.php';
}
else
{
	$_GET['all']=1;
	include 'blogfeed.php';
}
$news = new SimpleXMLElement(ob_get_clean());
echo "
		<div id=news style=\"position:relative;margin:50px;\">
			<h3 style=\"display:inline\">".$news->channel->title."</h3>
			<a href=blogfeed.php style=\"display:inline;right:0px;position:absolute;\">
				<img src=Rss-icon.png alt=\"image\">
			</a>
			<hr>
			".php_uname();
if (!empty($_GET['index']))
{
	$i=$_GET['index'];
	echo "
			<h4>
				{$news->channel->item[(count($news->channel->item)-$i)]->title}
			</h4><br>
			{$news->channel->item[(count($news->channel->item)-$i)]->description}<br>";
// echo "<a href=\"blog.php?index=".($_GET['index']-1)."\">prev</a>&#x20;&#x20;&#x20;<a href=\"blog.php?index=".($_GET['index']+1)."\">next</a>";
}
else if(!empty($_GET['page']))
{
	for($i=5*$_GET['page'];$i<5+(5*$_GET['page']);$i++)
	{
		echo "
			<h4>
				{$news->channel->item[$i]->title}
			</h4><br>
			{$news->channel->item[$i]->description}<br>";
	}
}
else
{
	for($i=0;$i<count($news->channel->item);$i++)
	{
		echo "
			<h4>
				{$news->channel->item[$i]->title}
			</h4><br>
			{$news->channel->item[$i]->description}<br>";
	}
// echo "<a href=\"blog.php?index=".(count($news->channel->item))."\">browse</a>";
}
echo "        </div>";
include_once "boilerplatebot.php";