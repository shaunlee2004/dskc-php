<div id="pagewrapper">
	<?php include Kohana::find_file("views", "headerBuffer");?>
	<?php
	
echo View::factory ( 'header' )->set ( 'headerTitle', $headerTitle )->set ( 'headerSubtitle', $headerSubtitle );
	?>
	
	<div id="content">
		<?php include Kohana::find_file("views", "menu");?>
		<?php include Kohana::find_file("views", "logoBuffer");?>

		<?php echo $mainContent ?>
		


		<div class="clearfloat"></div>
	</div>
	<?php include Kohana::find_file("views", "footer");?>
</div>
