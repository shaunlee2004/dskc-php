<p>Questions? Contact us at:</p>
<p>(703) 644-9770<p>
<p><?php echo HTML::mailto("dskc@dominionshotokan.com", "dskc@dominionshotokan.com" )?></p>
<?php

	if (!empty($form_errors)){
		echo "<div id=\"display-error\">";
		echo HTML::image('/media/img/error.png', array('alt' => 'Error'));
		echo "Message failed due to the following errors<br/>";
		foreach ($form_errors as $error_message){
			echo "<dd>" . $error_message . "<br/>";
		}
		echo "</div><br/>";
	} elseif(!empty($_POST) & empty($form_errors)) {
		$config = Kohana::$config->load('dskc');
		echo "<div id=\"display-success\">";
		echo HTML::image('/media/img/correct.png', array('alt' => 'Success'));
		echo "Your message was sent to " . $config['contact_us']['mail_recipient'] . "<br/>";
		echo "</div>";
	} 
?>
<p><?php echo $contact_form ?>