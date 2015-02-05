<?hh
$poweredby = [
["http://www.nginx.org ", "/pouar/nginx-logo.png"],
["http://hhvm.com", "/pouar/hhvm.png"],
["http://hacklang.org", "/pouar/hack.png"],
["http://www.php.net", "/pouar/220px-PHP-logo.svg.png"],
["http://www.centos.org", "/pouar/archlogo.png"],
];
echo "
				</td>
			</tr>
		</table>
		<div style=\"float: right;\">
			Powered by<br>";
foreach($poweredby as list($i, $j))
{
	echo "
			<a href=\"{$i}\" style=\"background-color:initial;\">
				<img style=\"display:initial;\" src=\"{$j}\" height=50 alt=\"image\" >
			</a>";
}
echo "
		</div>
	</body>
</html>"; 
