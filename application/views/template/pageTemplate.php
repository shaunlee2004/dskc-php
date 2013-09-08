<div id="pagewrapper">
	<?php include Kohana::find_file("views", "template\headerBuffer");?>
	<?php
	
echo View::factory ( 'template\header' )->set ( 'headerTitle', $headerTitle )->set ( 'headerSubtitle', $headerSubtitle );
	?>
	
	<div id="content">
		<?php include Kohana::find_file("views", "template\menu");?>
		<?php include Kohana::find_file("views", "template\logoBuffer");?>

		<?php echo $mainContent ?>
		<div class="clearfloat"></div>
	</div>
	<?php include Kohana::find_file("views", "template\pageFooter");?>
</div>
