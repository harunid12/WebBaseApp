<?php
	
	$a = "1234567";
	$b = password_hash($a, PASSWORD_DEFAULT);

	echo("password_hash: ".$b);


?>