<?php
$arr=[1,2,3,4,5,6,7,8,9];
for ($i=0; $i < $arr.length ; $i++) { 
	$temp = $arr[$i];
	for ($j=$i+1; $j < $arr.length ; $j++) { 
		if ($arr[$i] < $arr[$j]) {
			$arr[$i] = $arr[$j];
			$arr[$j] = $temp;
			$temp = $arr[$i];
		}
	}
} 
 ?>