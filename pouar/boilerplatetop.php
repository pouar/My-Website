<?php
$root='http';
if (!empty($_SERVER['HTTPS'])) {
	$root+='s';
}
$root+='://'.$_SERVER['HTTP_HOST'].'/pouar/';
$toplinks = [
["/pouar/blog.php", "Blog"],
["/pouar/downloads", "Downloads"],
["/pouar/form.php", "Joke form"],
["/pouar/3dlogo.php", "3D logo in three.js"],
["/bugzilla", "Bug Tracker"],
["/forum", "forum"],
["https://github.com/pouar/My-Website", "Github"],
["/cgit", "cgit"],
["/drupal", "Drupal"],
];
echo '		<meta charset="UTF-8">
		<link rel="icon" type="image/png" href="/pouar/diapericonarch_4.png" />
		<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css">
	</head>
	<body>
		<table>
			<tr>
				<td>
					<a href=/pouar/ style="background-color:initial;">
						<img style="display:block;width:178px;" src=/pouar/downloads/fursona2.svgz alt="image">
					</a>';
foreach($toplinks as list($i, $j))
{
	echo "
					<div style=\"width:270px\">
					<a class=\"btn btn-primary btn-large\"  href=\"{$i}\">{$j}</a>
					</div>";
}
echo '
				</td>
				<td style="width:100%;">';

