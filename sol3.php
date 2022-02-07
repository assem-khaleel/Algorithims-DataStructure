<?php
$a = [1,4,6];
$b = [2,3,5];

function margeArr($array1, $array2) {
	$result = [];

	foreach ($array1 as $val) {
		if(!in_array($val, $result)){
			$result[] = $val;
		}
	}

	foreach ($array2 as $val) {
		if(!in_array($val, $result)){
			$result[] = $val;
		}
	}

	return $result;
}


function sortArr($arr) {
	$len = count($arr);
	for($i = $len-1; $i>=0; $i--){
		for($j = 1; $j<=$i; $j++){
			if($arr[$j-1]>$arr[$j]){
				$temp = $arr[$j-1];
				$arr[$j-1] = $arr[$j];
				$arr[$j] = $temp;
			}
		}
   }
   return $arr;
}

echo "<pre>";print_r(sortArr(margeArr($a, $b)));
?>

