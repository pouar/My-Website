<!doctype html>
<html>
	<head>
		<title>My new website</title>

<?php
include_once "boilerplatetop.php";
ob_start();
include 'news.php';
$news = new SimpleXMLElement(ob_get_clean());
?>
		<div id=news style="position:relative;margin:50px;">
			<h3 style="display:inline">
				<?=$news->channel->title?>
			</h3>
			<a href=news.php style="display:inline;right:0px;position:absolute;">
				<img src=Rss-icon.png alt="image">
			</a>
			<hr>
			<?=php_uname();
for($i=0;$i<5;$i++)
{
	?>
			<h4>
				<?=$news->channel->item[$i]->title?>
			</h4><br>
				<?=$news->channel->item[$i]->description?><br>
	<?php
}
?>
		</div>
<?php
include_once "boilerplatebot.php";
