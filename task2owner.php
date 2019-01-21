<?php
	
	//the name of the owner of the current PHP script
	echo 'Current script owner: ' . get_current_user()."<br>";

	//document root directory in which current script is running
	$rd = getenv('DOCUMENT_ROOT');
	echo "Document root directory: " . $rd ."<br>";
	
	//get php OS
	echo 'PHP OS: ' . PHP_OS;

?>