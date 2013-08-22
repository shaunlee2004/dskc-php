<div id="pagewrapper">
	<?php Kohana::load('/application/views/headerBuffer.php');?>
	<?php //Kohana::load('/application/views/header.php');?>
<div id="header">
		<div class="logo"></div>
		<div class="title"><?php echo $headerTitle ?></div>
		<div class="subtitle"><?php echo $headerSubtitle ?></div>
		<div class="clearfloat"></div>
</div>
	<div id="content">
		<?php Kohana::load('/application/views/menu.php');?>
		<?php Kohana::load('/application/views/logoBuffer.php');?>


		<div class="title">What is Shotokan Karate?</div>
		<div style="float: right; position: relative;">
			<?php
			echo HTML::image ( "/media/img/MasterOkazaki-MajorsSensei-232x286.jpg", array (
					'width' => 232,
					'height' => 286 
			) )?>
			</div>
		<p>Karate-Do or "Way of the Empty Hand," is a scientific and
			philosophical method of unarmed self defense that developed over many
			centuries and cultures in the far and middle east. Gichin Funakoshi,
			known as the Father of Modern Karate, studied several methods of
			unarmed self-defense and synthesized what he learned into his style,
			called Shotokan.</p>

		<p>As a physical regimen, karate is a superb method of exercise and
			discipline. It works all major muscle groups and develops strength,
			coordination, and agility. Students of karate also develop a sense of
			self as well as a mental attitude that is conducive to the growth of
			personal character and respect for oneself and others.</p>

		<p>Classes are taught by Steven W. Majors, a yondan with over twenty-five
			years of teaching experience. He is a certified instructor, examiner
			and judge, having completed the official instructor training program
			of the International Shotokan Karate Federation (ISKF).</p>
			
		<p>Dominion Shotokan Karate Club, LLC is a member of the ISKF, an
			international organization that seeks to promulgate traditional
			Japanese karate-do throughout the world.</p>
			
			
		<div class="clearfloat"></div>	
	</div>
	<?php Kohana::load('/application/views/footer.php');?>
</div>





