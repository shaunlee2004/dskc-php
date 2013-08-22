<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-16 11:59:15 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\Kohana\View.php [ 171 ] in C:\xampp\htdocs\dskc\application\classes\Controller\basic.php:32
2013-08-16 11:59:15 --- DEBUG: #0 C:\xampp\htdocs\dskc\application\classes\Controller\basic.php(32): Kohana_View->__get('styles')
#1 C:\xampp\htdocs\dskc\system\classes\Kohana\Controller.php(69): Controller_Basic->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\dskc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 C:\xampp\htdocs\dskc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\dskc\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\dskc\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\dskc\application\classes\Controller\basic.php:32