<div id="pagewrapper">
	<?php Kohana::load('/application/views/headerBuffer.php');?>
	<?php
	
echo View::factory ( 'header' )->set ( 'headerTitle', $headerTitle )->set ( 'headerSubtitle', $headerSubtitle );
	?>
	
	<div id="content">
		<?php Kohana::load('/application/views/menu.php');?>
		<?php Kohana::load('/application/views/logoBuffer.php');?>

		<?php echo $mainContent ?>
		


		<div class="clearfloat"></div>
	</div>
	<?php Kohana::load('/application/views/footer.php');?>
</div>





