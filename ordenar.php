<?php

#creamos un array nuevo
$verarray=[7,6,1,5,9,6,3,111,114];

for($q=0 ; $q<count($verarray) ; $q++){
	for($l=$q+1 ; $l<count($verarray) ; $l++){

		if($verarray[$l] < $verarray[$q]){

			$sol = $verarray[$q];
			$verarray[$q] = $verarray[$l];
			$verarray[$l] = $sol;
		}
		
	}

}
for($q=0 ; $q<count($verarray) ; $q++){
	echo $verarray[$q]."<br>";
}


?>