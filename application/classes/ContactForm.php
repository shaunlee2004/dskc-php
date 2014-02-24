<?php

defined ( 'SYSPATH' ) or die ( 'No direct script access.' );
class ContactForm {

	public static function create(){
		$return = Form::open();
		$return .=
			Form::label("name", "Your Name: ") .
			Form::input("name", "", array("size" => "54")) .
			"<br/>" .
		Form::label("email", "Your Email: ") .
			Form::input("email", "", array("size" => "55")) .
			"<br/>" .
			Form::label("message", "Message") .
			"<br/>" .
			Form::textarea("message") .
			"<br/>" .
			Form::submit("submit", "Send Email");
		$return .= Form::close();
		return $return;
	}
	
	public static function verify_form(array $post){
		$post = Validation::factory($post)
			->rule('name', 'not_empty')
			->rule('email', 'not_empty')
			->rule('message', 'not_empty');
		if(!$post->check())	return $post->errors('Model\ContactUs');
		else return '';
	}

	public static function send_mail(array $post, $mail_admin, $mail_recipient){
			
		$mail = new Zend_Mail();
		$mail
			->setFrom($mail_admin, $post['name'])
			->addTo($mail_recipient, $mail_recipient)
			->setReplyTo($post['email'], $post['email'])
			->setSubject('Question about DSKC')
			->setBodyText($post['message']);
		$mail->send();

		
	}

}
?>
