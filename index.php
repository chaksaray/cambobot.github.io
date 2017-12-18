<?php

if(isset($_REQUEST['hub_challenge'])){
	$challenge = $_REQUEST['hub_challenge'];
	$verify_token = $_REQUEST['hub_verify_token'];
}

if ($verify_token === 'my_token_code') {
	echo $challenge;
}

$input = json_decode(file_get_contents('php://input'),true);
var_dump($input);