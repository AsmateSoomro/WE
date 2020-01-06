<?php 

for ($i=0; $i <50 ; $i++) { 
	
	if ($i%3==0 && $i%5==0) {
		echo "star_struck";
	}

	elseif ($i%3==0) {
		echo "star";
	}

	elseif ($i%5==0) {
		echo "struck";
	}

	else {
		echo $i;
	}
	echo "\n";
}


?>