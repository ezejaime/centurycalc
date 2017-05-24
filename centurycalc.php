<?php
$year = 201;
function centuryFromYear($year) {
$split = str_split($year);

	if ($year > 99 && $year <= 999) {
		
		if ($split[2] > 0) {
			return substr($year,0,1)+1;
		} else {
			return substr($year,0,1);
		}
	}	
	else {
		if ($year > 999) {
			if ($split[3] > 0) {
			return substr($year,0,2)+1;
			} else {
				return substr($year,0,2);
			}
			
		}
		else {
			return (1);
		}
	}

}

echo centuryFromYear($year);

?>
