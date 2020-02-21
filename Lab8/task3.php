<?php
	$url = "http://sw.muet.edu.pk/faculty/cvs/example.pdf";
	$urlParse =  parse_url($url);
	foreach($urlParse as $ur=> $value){
		echo $ur . " = " . $value . "<br>";
	}

?>