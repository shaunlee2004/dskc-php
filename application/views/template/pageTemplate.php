<div id="pagewrapper">
	<?php
	
	echo View::factory ( "template".DIRECTORY_SEPARATOR."header" )->set ( 'headerTitle', $headerTitle )->set ( 'headerSubtitle', $headerSubtitle );
	?>
	
	<?php include Kohana::find_file("views", "template".DIRECTORY_SEPARATOR."menu");?>
	
	<div id="content">
		<?php echo $mainContent?>
		<div class="clearfloat"></div>
	</div>
	<?php include Kohana::find_file("views", "template".DIRECTORY_SEPARATOR."pageFooter");?>
</div>
