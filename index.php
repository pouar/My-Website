<?hh
include_once $_SERVER['DOCUMENT_ROOT'].'pouar/boilerplatetop.php';
$files = scandir('.');
echo "<div id=news style=\"position:relative;margin:50px;\"><h3 style=\"display:inline\">".$_SERVER['REQUEST_URI']."</h3><hr>".php_uname();
echo <<<EOF
<style>
.td
{
	width:33%;
}
</style>
EOF;
echo '<table style="width:100%">';
	echo '<tr><th class=td>file</th><th class=td>file size</th><th class=td>mtime</th></tr>';
foreach($files as $i)
{
	echo '<tr><td class=td><a href="'.$i.'">'.$i.'</a></td><td class=td>'.(filesize($i)/1024).' kb</td><td class=td>'.date('r',filemtime($i)).'</td></tr>';
}
echo '</table></div>';
include_once $_SERVER['DOCUMENT_ROOT'].'pouar/boilerplatebot.php';