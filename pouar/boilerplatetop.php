<?hh
$root='http://'.$_SERVER['HTTP_HOST'].'/pouar/';
$toplinks = [
["blog.php", "Blog"],
["downloads", "Downloads"],
["form.php", "Joke form"],
["3dlogo.php", "3D logo in three.js"],
["../bugzilla", "Bug Tracker"],
];
echo <<<EOF
<a href="https://github.com/pouar/My-Website"><img style="position: absolute; top: 0; right: 0; border: 0;" src="forkmebanner.png" alt="Fork me on GitHub"></a>
EOF;
echo '<link rel="stylesheet" type="text/css" href="style.css">';
echo '<link rel="icon" type="image/png" href="marioskate.png" />';
echo '</head><body>';
echo '<div id=top><a href='.$root.'><img src=marioskatehq2x.png style="position:absolute;top:0;left:0;"></a><div style="position:absolute;top:0px;right:150px;left:50px;"><ul id=links>';
foreach($toplinks as list($i, $j))
{
	echo '<li><a class=toplink href="'.$i.'">'.$j.'</a></li>';
}
echo '</ul></div></div>';

