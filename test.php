<?php
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);
	echo 'start';
	require_once __DIR__.'/vendor/autoload.php';

	\Hello\Hello::test();