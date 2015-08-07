<?php
$poweredby = [
["http://www.nginx.org ", "/pouar/nginx-logo.png"],
["http://hhvm.com", "/pouar/hhvm.png"],
["http://www.centos.org", "/pouar/archlogo.png"],
];
?>
				</td>
			</tr>
		</table>
		<div style="float: right;">
			Powered by<br>
			<?php
foreach($poweredby as list($i, $j))
{
	?>
			<a href="<?=$i?>" style="background-color:initial;">
				<img style="display:initial;" src="<?=$j?>" height=50 alt="image" >
			</a>
	<?php
}
?><br><span>Copyleft <span style="-moz-transform: scale(-1, 1);-webkit-transform: scale(-1, 1);-o-transform: scale(-1, 1);-ms-transform: scale(-1, 1);transform: scale(-1, 1);display:inline-block;">&copy;</span> 2015 Pouar. All rights reversed.</span>
		</div>
	</body>
</html>