<?php

function displayData(){
	$myBio = array(
		"first-name" => "Saray",
		"last-name" => "Chak",
		"phone" => "015704480",
		"gender" => "M",
		"dob" => "04/03/1996",
		"pob" => "Banteay Mean Chey Province",
		"social" => array(
			"fb" => array(
				"name" => "saray Chak",
				"link" => "",
				),
			"github" => array(
				"name" => "saray Chak",
				"link" => "",
				),
			),
	);

	return json_encode($myBio);
}
print_r(displayData());
?>