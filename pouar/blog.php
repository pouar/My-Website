<!doctype html>
<html>
	<head>
		<title>Blog</title>
<?php
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
?>
					<div id=news style="position:relative;margin:50px;">
						<h3 style="display:inline"><?=$news->channel->title?></h3>
						<a href=blogfeed.php style="display:inline;right:0px;position:absolute;">
							<img src=Rss-icon.png alt="image">
						</a>
						<hr>
							<?=php_uname();
if (!empty($_GET['index']))
{
	$i=$_GET['index'];
	?>
	
			<h4>
				<?=$news->channel->item[(count($news->channel->item)-$i)]->title?>
			</h4><br>
			<?=$news->channel->item[(count($news->channel->item)-$i)]->description?><br>
	<?php
// echo "<a href=\"blog.php?index=".($_GET['index']-1)."\">prev</a>&#x20;&#x20;&#x20;<a href=\"blog.php?index=".($_GET['index']+1)."\">next</a>";
}
else if(!empty($_GET['page']))
{
	for($i=5*$_GET['page'];$i<5+(5*$_GET['page']);$i++)
	{
		?>
			<h4>
				<?=$news->channel->item[$i]->title?>
			</h4><br>
			<?=$news->channel->item[$i]->description?><br>
		<?php
	}
}
else
{
	for($i=0;$i<count($news->channel->item);$i++)
	{
		?>
			<h4>
				<?=$news->channel->item[$i]->title?>
			</h4><br>
			<?=$news->channel->item[$i]->description?><br>
		<?php
	}
// echo "<a href=\"blog.php?index=".(count($news->channel->item))."\">browse</a>";
}
?>
			</div>
<?php
include_once "boilerplatebot.php";
?>