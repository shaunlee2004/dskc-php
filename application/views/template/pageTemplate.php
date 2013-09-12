<div id="pagewrapper">
	<?php include Kohana::find_file("views", "template".DIRECTORY_SEPARATOR."headerBuffer");?>
	<?php
	
	echo View::factory ( "template".DIRECTORY_SEPARATOR."header" )->set ( 'headerTitle', $headerTitle )->set ( 'headerSubtitle', $headerSubtitle );
	?>
	
	<div id="content">
		<?php include Kohana::find_file("views", "template".DIRECTORY_SEPARATOR."menu");?>
		<?php
		if ($isLogoWrapping == true) {
			include Kohana::find_file ( "views", "template".DIRECTORY_SEPARATOR."logoBuffer" );
		} else {
			include Kohana::find_file ( "views", "template".DIRECTORY_SEPARATOR."logoLineBuffer" );
		}
		?>

		<?php echo $mainContent?>
		<div class="clearfloat"></div>
	</div>
	<?php include Kohana::find_file("views", "template".DIRECTORY_SEPARATOR."pageFooter");?>
</div>
