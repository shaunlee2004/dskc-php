<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-14 06:16:57 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_HTML::image() must be of the type array, integer given, called in C:\xampp\htdocs\kohana\application\views\home.php on line 40 and defined ~ SYSPATH\classes\Kohana\HTML.php [ 270 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\HTML.php:270
2013-08-14 06:16:57 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\HTML.php(270): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\xampp\htdocs...', 270, Array)
#1 C:\xampp\htdocs\kohana\application\views\home.php(40): Kohana_HTML::image('assets/img/gene...', 1000, 44)
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\kohana\application\views\template.php(10): Kohana_View->__toString()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\xampp\htdocs\kohana\application\classes\Controller\basic.php(47): Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Controller_Basic->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#13 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#16 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\HTML.php:270