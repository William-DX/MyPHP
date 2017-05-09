<?php
	//bubbleSort
	function bubbleSort(&$array){
		$length = count($array);
		for($i = $length - 1;$i > 0;$i--){
			for($j = 0; $j < $i;$j++){
				if($array[$j] > $array[$j + 1]){
					$temp = $array[$j];
					$array[$j] = $array[$j + 1];
					$array[$j + 1] = $temp; 
				}
			}
		}
		return $array;
	}

	$array = array(11,2,36,1,10,25,85,99,77);
	$start = microtime(true);
	bubbleSort($array);
	$end = microtime(true);
	echo '<pre>';
	var_dump($start, $end);
	print_r($array);