<!doctype html>
<html>
	<head>
		<title>
			My new website
		</title>
	<style>
		.td
		{
			width:33%;
		}
	</style>
<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/pouar/boilerplatetop.php';
$files = scandir('.');
?>

		<div id=news style=\"position:relative;margin:50px;\">
			<h3 style=\"display:inline\"><?=$_SERVER['REQUEST_URI']?></h3>
			<hr>
			<?=php_uname();?>
			<table style="width:100%">
				<tr>
					<th class=td>
						file
					</th>
					<th class=td>
						file size
					</th>
					<th class=td>
						mtime
					</th>
				</tr>
<?php
foreach($files as $i)
{
	?>
				<tr>
					<td class=td>
						<a href="<?=rawurlencode($i)?>">'<?=$i?>'</a>
					</td>
					<td class=td>
	<?php
		$filesize=filesize($i);
		if($filesize>=1024000000)
		{
			echo ($filesize/1024000000).' GB';
		}
		else if($filesize>=1024000)
		{
			echo ($filesize/1024000).' MB';
		}
		else if($filesize>=1024)
		{
			echo ($filesize/1024).' KB';
		}
		else
		{
			echo $filesize.' Bytes';
		}
	?>
					</td>
					<td class=td>
						<?=date('r',filemtime($i))?>
					</td>
				</tr>
	<?php
}
?>
			</table>
		</div>
<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/pouar/boilerplatebot.php';