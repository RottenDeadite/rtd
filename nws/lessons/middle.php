<!-- BODY -->
	<!-- #content -->
		<div class="lesson">
			<div class="lessonbody">
				<h1 class="lessontitle">Lesson <?php echo ucwords(numberToWord($sermon)); ?></h1>
				<p><span class="lessonlink" data-call="<?php echo pad($sermon); ?>-000">Synopsis</span> | <span class="audiolink" id="narration">Narration</span></p>
				<audio id="embedded" width="512" height="288" controls="controls">
					<source src="../media/36Lessons<?php echo pad($sermon); ?>.mp3" type="audio/mpeg">
				</audio>