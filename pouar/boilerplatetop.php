<?hh
$root='http://'.$_SERVER['HTTP_HOST'].'/pouar/';
$toplinks = [
["blog.php", "Blog"],
["downloads", "Downloads"],
["https://github.com/pouar/My-Website", "source code"],
];
echo <<<EOF
<a href="https://github.com/pouar/My-Website"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/365986a132ccd6a44c23a9169022c0b5c890c387/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f7265645f6161303030302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png"></a>
EOF;
echo '<link rel="stylesheet" type="text/css" href="style.css">';
echo '<link rel="icon" type="image/png" href="'.$root.'marioskate.png" />';
echo '</head><body>';
echo '<div id=top><a href='.$root.'><img src='.$root.'marioskatehq2x.png style="position:absolute;top:0;left:0;"></a><div style="position:absolute;top:0px;right:0px;left:50px;"><ul id=links>';
foreach($toplinks as list($i, $j))
{
	echo '<li><a class=toplink href="'.$i.'">'.$j.'</a></li>';
}
echo '</ul></div></div>';

