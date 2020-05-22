<!-- HTML -->
<!-- BODY -->
	<!-- DIV #content -->
		<!-- DIV .lesson -->
			<!-- DIV .lessonbody -->
			</div>
			<nav class="lessonfooter">
				<ul>
					<li><a href="01.php" rel="first">First Lesson</a></li><li><a href="<?php echo pad($sermon-1); ?>.php" rel="prev">Previous Lesson</a></li><li><a href="../index.php" rel="up">Index</a></li><li><a href="<?php echo pad($sermon+1); ?>.php" rel="next">Next Lesson</a></li><li><a href="36.php" rel="last">Last Lesson</a></li>
				</ul>
			</nav>
		</div>
		<div class="comment" id="comment" aria-hidden="true">
			<div class="content">
				<div class="commentbody" id="commentcontent">

				</div>
			</div>
		</div>
	</div>
	<!-- Google Analytics -->
	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-53512164-2', 'auto');
	ga('send', 'pageview');

	</script>
	<!-- End Google Analytics -->

	<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
	<script src="../plugins/flowplayer-3.2.6.min.js" type="text/javascript"><!-- help ie --></script>
	<script src="../js/jquery.oiplayer.js" type="text/javascript"><!-- help ie --></script>
	<!-- <script>
					$(document).ready(function(){
						$('#commentcontent').html($('#<?php echo pad($sermon); ?>-000').html());
					});
	</script> -->
    <script>
        $(document).ready(function(){
            // Creates two data attributes to the HTML element for purposes of fine-tuning CSS.
            var b = document.documentElement;
            b.className = b.className.replace('no-js', 'js');
            b.setAttribute("data-useragent",  navigator.userAgent);
            b.setAttribute("data-platform", navigator.platform );

            $('#embedded').hide();
            let $commentbody = $('.commentbody');
            let $lessonlink = $('.lessonlink');  // All <span> links
            let $audiolink = $('.audiolink');
            let $content = $('#content');
            let $commentContent = $('#commentcontent');
            let $comment = $('#comment');
            $lessonlink.click(function(){
                let $ele = $(this);
                let ident = $ele.data('call');
                $commentContent.html('');
                $commentContent.html($("div[data-ident='" + ident + "']").clone(true,true));
                if ($ele.hasClass('soHotRightNow')) { // If we're clicking on an activated lessonlink
                    $lessonlink.removeClass('soHotRightNow');
                    $ele.removeClass('soHotRightNow');
                    $commentbody.removeClass('visible');
                    $content.removeClass('smaller');
                    $comment.attr('aria-hidden', 'true');
                } else { // Else we've clicked on a non-activated lessonlink
                    $lessonlink.removeClass('soHotRightNow');
                    $commentbody.addClass('visible');
                    $ele.addClass('soHotRightNow');
                    if ($(window).width() <= 1024 && !$('.grid').hasClass('smaller')) { // If we're in mobile and a comment isn't open, scroll the lesson window.
                        $('.lesson').animate({scrollTop:document.querySelector('[data-call="' + ident + '"]').offsetTop - 20}, 500);
                    }
                    $content.addClass('smaller');
                    $comment.attr('aria-hidden', 'false');
                }
            });
            $audiolink.click(function(){
                $('#embedded').toggle(400)
            });
            $('body.oiplayer-example').oiplayer();
            $('a.imgModal').click(function(e){
                let link = $(this).attr('href');
                showModal();
                $('#modalContent').addClass('visible').html('<img src="' + link + '"/>');
                e.preventDefault();
            });
            $('a.htmlModal').click(function(e){
                let id = $(this).attr('href');
                let $content = $('#' + id);
                showModal();
                $('#htmlContent').addClass('visible').html($content.clone(true,true));
                e.preventDefault();
            });
            $('#modalBg').click(function(e){
                hideModal();
            });
            $('#modalClose').click(function(e){
                hideModal();
            });
            function showModal(){
                let $modal = $('#modalWrapper');
                $('#modalBg').addClass('visible');
                $modal.children('.visible').removeClass('visible');
                $modal.addClass('visible').attr('aria-hidden', 'false');
                return true;
            }
            function hideModal(){
                let $modal = $('#modalWrapper');
                $('#modalBg').removeClass('visible');
                $modal.children('.visible').removeClass('visible');
                $modal.removeClass('visible').attr('aria-hidden', 'true');
                $('#htmlContent').html('');
                $('#modalContent').html('');
                return true;
            }
        });
    </script>
	<link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet" />
	<link rel="stylesheet" media="all" href="../css/lessons.css" />
	<link href="../css/oiplayer.css" rel="stylesheet" type="text/css" />
</body>
</html>