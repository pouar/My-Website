<?hh
include_once $_SERVER['DOCUMENT_ROOT'].'pouar/boilerplatetop.php';
$files = scandir('.');
echo "<div id=news style=\"position:relative;margin:50px;\"><h3 style=\"display:inline\">".$_SERVER['REQUEST_URI']."</h3><hr>".php_uname();
foreach($files as $i)
{
	echo '<p><a href="'.$i.'">'.$i.'</a></p>';
}
include_once $_SERVER['DOCUMENT_ROOT'].'pouar/boilerplatebot.php';