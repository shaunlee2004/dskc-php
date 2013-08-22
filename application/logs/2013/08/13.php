<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-13 13:17:36 --- CRITICAL: View_Exception [ 0 ]: The requested view contact could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2013-08-13 13:17:36 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('contact')
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('contact', NULL)
#2 C:\xampp\htdocs\kohana\application\classes\Controller\page.php(16): Kohana_View::factory('contact')
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Page->action_contact()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2013-08-13 15:45:27 --- CRITICAL: View_Exception [ 0 ]: The requested view contact could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2013-08-13 15:45:27 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('contact')
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('contact', NULL)
#2 C:\xampp\htdocs\kohana\application\classes\Controller\page.php(23): Kohana_View::factory('contact')
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Page->action_contact()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2013-08-13 17:31:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\test.php [ 2 ] in :
2013-08-13 17:31:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-13 17:36:07 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method URL::file() ~ APPPATH\views\test.php [ 4 ] in :
2013-08-13 17:36:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :