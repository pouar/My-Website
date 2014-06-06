<?hh
$poweredby = [
["http://www.nginx.org ", "http://wiki.nginx.org/local/nginx-logo.png"],
["http://hhvm.com", "http://hhvm.com/wp-content/themes/hhvm/hhvm.png"],
["http://hacklang.org", "http://hacklang.org/wp-content/themes/hack/hack.png"],
["href=http://www.php.net", "http://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/220px-PHP-logo.svg.png"],
["href=http://www.centos.org", "http://mirror.centos.org/centos/graphics/centos-292.png"],
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
