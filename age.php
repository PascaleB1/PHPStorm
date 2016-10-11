<?php

	$age=array("Emmanuel"=>"42", 
		    "Thierry"=>"51", 
		     "Pascal"=>"45",
		       "Eric"=>"48", 
		    "Nicolas"=>"19");

	$moyenne = array_sum ($age)/count($age);

	print_r($age);
	
	echo $moyenne;

?>


