<?php
	
	$data = $_REQUEST; //_REQUEST will accept either $_GET or $_POST
	$user_text = $_REQUEST['user_text'];
	$response = strtoupper( $user_text );
	echo $response;
	
?>