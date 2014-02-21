<?php defined('SYSPATH') or die('No direct script access.');

  return array
  (
     'name' => array
     (
        'not_empty' => 'Name is required'
     ),
  		'email' => array
     (
        'not_empty' => 'Email is required'
     ),
     'message' => array
     (
        'not_empty' => 'Message cannot be blank'
     ),
  );

?>