<?hh
include_once $_SERVER['DOCUMENT_ROOT'].'pouar/boilerplatetop.php';
$files = scandir('.');
foreach($files as $i)
{
	echo '<p><a href="'.$i.'">'.$i.'</a></p>';
}
include_once $_SERVER['DOCUMENT_ROOT'].'pouar/boilerplatebot.php';