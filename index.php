<?php

if(isset($_REQUEST['hub_challenge'])){
	$challenge = $_REQUEST['hub_challenge'];
	$verify_token = $_REQUEST['hub_verify_token'];
}

if ($verify_token === 'my_token_code') {
	echo $challenge;
}

$input = file_get_contents('php://input');
var_dump($input);