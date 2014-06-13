<?hh
$poweredby = [
["http://www.nginx.org ", "nginx-logo.png"],
["http://hhvm.com", "hhvm.png"],
["http://hacklang.org", "hack.png"],
["href=http://www.php.net", "220px-PHP-logo.svg.png"],
["href=http://www.centos.org", "centos-logo-light.png"],
];
echo '<div style="position:fixed;bottom:0px;right:0px;';
if(isset($_GET['hidepb']))
{
	echo 'display:none;';
}
echo '">Powered by<br>';
foreach($poweredby as list($i, $j))
{
	echo '<a href="'.$i.'"><img src="'.$j.'" height=50 /></a>';
}
echo '<br><a href="'.$_SERVER['PATH_INFO'].'?hidepb">click to hide this</a></div></body></html>'; 
