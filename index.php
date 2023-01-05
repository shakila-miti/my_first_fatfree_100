<?php

if (file_exists('vendor/autoload.php')) {
	// load via composer
	require_once('vendor/autoload.php');
	$f3 = \Base::instance();
} elseif (!file_exists('lib/base.php')) {
	die('library not found`.');
} else {
	$f3=require('lib/base.php');
}

$f3->set('DEBUG',1);
if ((float)PCRE_VERSION<8.0)
	trigger_error('PCRE version is out of date');

// Load configuration
$f3->config('config.ini');

$f3->route('GET /',
    function() {
        echo 'This is my first project!!!';
    }
);

$f3->route('GET /personal',
    function() {
        echo 'My name is Miti!!';
    }
);

$f3->run();
