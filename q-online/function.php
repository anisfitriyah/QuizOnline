<?php //filename : functions.php

function pass_crypt ($pass) {

	$format = "$2a$10$"; 
	$hash = "tes1tes1tes1";
	$salt = $format . $hash;
	
	$new_pass = crypt ($pass , $salt);
	return $new_pass;
}
?>