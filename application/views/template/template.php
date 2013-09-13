<!doctype html>
<html lang="<?php echo I18n::$lang ?>">
<head>
<meta charset="utf-8">
<title><?php echo $title ?></title>
      <?php foreach ($styles as $file => $type) echo HTML::style($file, array('media' => $type)), PHP_EOL?>
          <?php foreach ($scripts as $file) echo HTML::script($file), PHP_EOL?>
<!-- made by www.metatags.org -->
<meta name="description"
	content="Dominion Shotokan Karate Club, LLC is a member of the ISKF, an international organization that seeks to promulgate traditional Japanese karate-do throughout the world." />
<meta name="keywords"
	content="Karate,Shotokan,Martial arts,training,Northern virginia, virginia, ISKF, International Shotokan Karate Federation, Teruyuki Okazaki, Steven Majors,, Steve Majors, Shaun Lee" />
<meta name="author" content="Shaun Lee">
<meta name="robots" content="index, follow">
<meta name="revisit-after" content="1 month">
<!-- Shotokan, Karate, Virginia -->
</head>
<body>
	<?php echo $content?>
</body>
</html>