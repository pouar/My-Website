<?php
if (!empty($_SERVER['HTTPS'])) {
	$root='https://'.$_SERVER['HTTP_HOST'].'/pouar/';
}
else {
	$root='http://'.$_SERVER['HTTP_HOST'].'/pouar/';
}
?>
<rss version="2.0">
	<channel>
		<title>Pouar's Blog</title>
		<description>
			what the title said
		</description>
		<link>
			<?=$root?>
		</link>
		<image>
			<url>
				<?=$root?>marioskatehq4x.png
			</url>
			<title>
				Pouar's Site
			</title>
			<link>
				<?=$root?>
			</link>
		</image><?php
$items = [
["The perfect VM","Sun, 12 Apr 2014 20:15:00 -0500",'Finally got the perfect VM for the kind of development I like, using LLVM I managed to compile and link an example program done in C to LLVM bytecode that runs with lli in a platform-independent manner. the file is here <a href="'.$root.'blog/xstreamos1.png">'],
["Some ISPs are blocking encryption","Mon, 13 Oct 2014 19:39:00 -0500","Found out some wireless ISPs are blocking encryption because the Net Neutrality rules don't apply to wireless when they obviously should<br><a href=https://www.techdirt.com/articles/20141012/06344928801/revealed-isps-already-violating-net-neutrality-to-block-encryption-make-everyone-less-safe-online.shtml>https://www.techdirt.com/articles/20141012/06344928801/revealed-isps-already-violating-net-neutrality-to-block-encryption-make-everyone-less-safe-online.shtml</a>"],
["The real reason why a replicater won't become a reality","Tue, 12 Oct 2014 12:21:00 -0500", "The real reason we won't see a replicator like the ones in Star Trek isn't because we can't make one. But because the companies who make them will put DRM in them and the DMCA will make it illegal for us to take the DRM out. The government will go along with this because the companies will say \"but think of the poor farmers/manufacturers/etc\" or something similar. I wouldn't be surprised if the government will require people to put DRM in those things."],
["PSA", "Tue, 17 Jun 2014 19:39:00 -0500", "There's a really cool illumos distro called OpenSXCE that has loads of potential, but it's currently a one man job (It's actually amazing he got it this far). Martin Bochnig , the guy who put it together, invested a shitload (to put it mildly) of time nad money into this. What I'm asking is if you're a Solaris/illumos developer, please help him out. Also donate if you can."],
["XStreamOS", "Tue, 17 Jun 2014 19:39:00 -0500", "About time I made use of this. For my first post I wanted to mention an illumos distro called <a href=".rawurlencode('http://sonicle.com/index.jsp?pagename=xstreamos&parent=products').">XStreamOS</a>, which has given me new hope in the post-sun world of Solaris. XStreamOS is made by Sonicle, who seems to be focused in web development and infrastructure. They said they've delivered solutions for clients on Solaris 8 9 &amp; 10, and when Oracle bought out Sun they decided to make their own OS based off of illumos. Anyway I tried out the XStream Desktop which seems to be based off of LXDE, which is an awesone desktop environment by the way. The XStream Desktop is the Desktop version. One reason I like it is it doesn't use the old Java Desktop but something more modern. They Haven't release all the sources but they seem to plan to, the sources they've released so far are <a href=".rawurlencode('https://github.com/sonicle/').'>here</a>. It looks very promising and I plan on keeping an eye on its development <br><a href="'.$root.'blog/xstreamos1.png"><img src="'.$root.'blog/xstreamos1.png" height="150" alt=Image></a><a href="'.$root.'blog/xstreamos2.png" ><img src="'.$root.'blog/xstreamos2.png" height="150" alt=Image></a><a href="'.$root.'blog/xstreamos3.jpg"><img src="'.$root.'blog/xstreamos3.jpg" height="150" alt=Image></a><a href="'.$root.'blog/xstreamos4.jpg"><img src="'.$root.'blog/xstreamos4.jpg" height="150" alt=Image></a><a href="'.$root.'blog/xstreamos5.png"><img src="'.$root.'blog/xstreamos5.png" height="150" alt=Image></a>'],
];
if(isset($_GET['all']))
{
	foreach($items as list($i, $j, $k))
	{
		?>
		<item>
			<title>
				<?=$i?>
			</title>
			<pubDate>
				<?=$j?>
			</pubDate>
			<link>
				<?=$root?>
			</link>
			<description>
				<![CDATA[<?=$k?>]]>
			</description>
		</item><?php
	}
}
else
{
	for($i=0;$i<5;$i++)
	{
		?>
		<item>
			<title>
				<?=$items[$i][0]?>
			</title>
			<pubDate>
				<?=$items[$i][1]?>
			</pubDate>
			<link>
				<?=$root?>
			</link>
			<description>
				<![CDATA[<?=$items[$i][2]?>]]>
			</description>
		</item><?php
	}
}
?>
	</channel>
</rss>
