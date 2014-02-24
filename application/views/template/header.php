<div id="headerContainer">
	<div id="headerBuffer">
		<?php if(!empty($banner)) echo HTML::anchor($banner['href'], '<div class="banner red"><br/>' . $banner['message'] . '</div>'); ?>
	</div>
	<div id="header">
		<div class="logo"></div>
		<div class="title"><?php echo $headerTitle ?></div>
		<div class="subtitle"><?php echo $headerSubtitle ?></div>
		<div class="clearfloat"></div>
	</div>
</div>