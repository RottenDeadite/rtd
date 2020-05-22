<?php
include 'head.php';
echo getHeader('The New Whirling School - Changelog', 'css/intro.css');
?>
<body>
	<div class="centering">
		<p class="index"><a href="index.php">Index</a></p>
		<p class="heading">Change Log</p>
		<table class="changelog">
			<tr><td class="date">10-11-2019</td><td><p>A new essay has been uploaded, "Entering Paradise, Our Mother," which turned out to be pretty necessary to explaining a few points in Sermon 21, which is also ready.</p></td></tr>
			<tr><td class="date">02-27-2019</td><td><p>Sermon 20 has been uploaded. The delay was astonishing, but we got a lot of great work done in preparation for the rest of Vivec's children. Also, to be completely transparent, a lot of life happened to me over the past few years, and a lot of my hobbies suffered for it.</p></td></tr>
			<tr><td class="date">02-26-2019</td>
				<td><p>For the first time in years, I've updated the site. Here's a list of what got done:</p>
					<ul>
						<li><p>Rebuilt the entire structure and layout of the Lessons section of the site. Now we're using...</p>
							<ul>
								<li><p>A CSS Grid layout to manage the left and right panes</p></li>
								<li><p>Data element-driven JS to match comments to lesson links</p></li>
								<li><p>A restructured DOM for better SEO (still gotta do Aria elements though)</p></li>
								<li><p>A new modal system for inlined texts and links that didn't need to link externally</p></li>
							</ul>
						</li>
						<li><p>Shifted the entire site to PHP (with few exceptions) and SCSS. This should reduce the amount of repetitive code, and create a much more consistent interface across the site.</p></li>
						<li><p>I've reprogrammed all the jQuery across the site for a way mo betta speed improvement on an already fast system. It probably didn't need to be done, but I couldn't stop myself from fixing something that was badly made.</p></li>
						<li><p>The mobile experience on the site has been improved across the board. This will also improve our SEO considering Google will be kinder to my scores.</p></li>
						<li><p>The site is also now using a new custom font icon suite to communicate key UI elements for a better user experience.</p></li>
					</ul>
				</td>
			</tr>
			<tr><td class="date">10-08-2016</td><td><p>Updated Sermon 18 with less idiocy and obvious mistakes.</p></td></tr>
			<tr><td class="date">09-22-2016</td><td><p>Wow. Sermon 18 took me 3 months to write. At this rate, I'll be dead before I'm done here.</p><p>Well, the good news is that I'm significantly reducing the number of hobbies I try to support. Music and wargaming is out the window, for better or for worse.</p></td></tr>
			<tr><td class="date">06-22-2016</td><td><p>Apparently I forgot to update this file when I uploaded Sermon 16. I'm only noticing now because I just uploaded Sermon 17. So hey, that's what I've been doing.</p></td></tr>
			<tr><td class="date">10-23-2015</td><td><p>Sermon 15 is up. This one's got some seriously long comments in it. Sorry 'bout that.</p></td></tr>
			<tr><td class="date">09-27-2015</td><td><p>Just a tiny update. I've converted the lessons over to PHP format, which makes updates a lot more consistent because there's less text to duplicate, and by extension, less chances to screw something up.</p><p>Unfortunately this also means that the lessons will load a tiny bit slower than they used to.</p><p>I've also uploaded the narrations for Sermons 01-14, so that little media player thing should be working now.</p></td></tr>
			<tr><td class="date">08-17-2015</td><td><p>Well, it took me nearly three months to the day, but I finally put up Sermon 14. There's also a new feature to the site, a little secret I've dotted around the site for you to find. You can thank <a href="https://www.reddit.com/user/qu1nlan" target="_blank" class="external">Qu1nlan</a> for the real work.</p></td></tr>
			<tr><td class="date">05-18-2015</td><td><p>A fresh round of upgrades to Sermon 09 and Sermon 13 after some very helpful suggestions by reddit user <a href="http://www.reddit.com/user/Cheydin" target="_blank" class="external">Cheydin</a>.</p></td></tr>
			<tr><td class="date">05-12-2015</td><td><p>Uploaded Sermon 13.</p></td></tr>
			<tr><td class="date">04-29-2015</td><td><p>Went back and added a few lines to a few Sermons here and there, mostly to help tie together connections made in Sermon 13. Nothing Earth-shattering, really.</p></td></tr>
			<tr><td class="date">04-07-2015</td><td><p>Sermon 12 finally sees the light of day. I'm uploading literally seconds after I've finished typing it up, so expect a few small unlogged updates to follow as the community finds little mistakes that snuck past me.</td></tr>
			<tr><td class="date">03-09-2015</td><td><p>Sermon 11 is up. I'm not even going to bother to mention the number of tiny changes I made to other Sermons because they're far too small to make much of a difference.</td></tr>
			<tr><td class="date">03-05-2015</td><td><p>Minor edits to Sermon 10. Like, you know, changing the title to "Sermon Ten" instead of "Sermon Eight." Durrrrrr...</p></td></tr>
			<tr><td class="date">02-18-2015</td><td><p>Added Sermon 10, and made some additional edits to previous Sermons.</p></td></tr>
			<tr><td class="date">01-21-2015</td><td><p>Changed some of the descriptions of Mantling in Sermon 06, having been reminded of a connection by someone in /tg/. Good on ya, Anon.</p></td></tr>
			<tr><td class="date">01-13-2015</td><td><p>Happy new year! Sermon 09 is up. Expect minor changes to texts in previous sermons that are aren't worth mentioning here.</p></td></tr>
			<tr><td class="date">12-22-2014</td><td><p>Uploaded Sermon 08. Minor alterations to other Lessons.</p></td></tr>
			<tr><td class="date">11-19-2014</td><td><p>Changed a few mistakes in Sermon 05, which is not a great piece of work in general, I think.</p></td></tr>
			<tr><td class="date">11-06-2014</td><td><p>At long last, Sermon 07. Additional Sermons are going to be slow going for the next few months as I work out some real life job stuff. Thanks for your patience.</p></td></tr>
			<tr><td class="date">08-08-2014</td><td><p>Added Sermon 06.  Made minor changes to some of the other Sermons, but nothing earth-shattering.</p></td></tr>
			<tr><td class="date">08-05-2014</td><td><p>Fixed a bad tag in Sermon 03.</p></td></tr>
			<tr><td class="date">06-19-2014</td><td><p>Sermon 05 is up.  Some more changes to prevous sermons, as well as a global switch to gender-neutral pronouns.</p></td></tr>
			<tr><td class="date">05-29-2014</td><td><p>Added Sermon 04, changed some layout here and there, updated the Index's layout in a few ways that amuse me but largely amount to nothing more than that.  Also Sermons 1-3 got a few <em>very minor</em> changes and corrections in both layout and content.</p></td></tr>
		</table>
		<p class="index"><a href="index.php">Index</a></p>
	</div>
<?php include 'foot.php'; ?>
</body>
</html>