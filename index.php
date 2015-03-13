<?hh
echo '<!doctype html>
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
';
include_once $_SERVER['DOCUMENT_ROOT'].'/pouar/boilerplatetop.php';
$files = scandir('.');
echo "\n\t\t<div id=news style=\"position:relative;margin:50px;\">\n\t\t\t<h3 style=\"display:inline\">{$_SERVER['REQUEST_URI']}</h3>\n\t\t\t<hr>\n\t\t\t".php_uname();
echo '
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
				</tr>';
foreach($files as $i)
{
	echo '
				<tr>
					<td class=td>
						<a href="'.rawurlencode($i).'">'.$i.'</a>
					</td>
					<td class=td>
						';
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
	echo '
					</td>
					<td class=td>
						'.date('r',filemtime($i)).'
					</td>
				</tr>';
}
echo '
			</table>
		</div>';
include_once $_SERVER['DOCUMENT_ROOT'].'/pouar/boilerplatebot.php';