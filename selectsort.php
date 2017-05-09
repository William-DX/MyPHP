<?php
	
	//选择排序(从小到大)
	function selectSort(&$array){
		$length = count($array);
		for($i = 0; $i < $length - 1;$i++){
			$min = $i;
			for($j = $i + 1;$j < $length; $j++){
				if($array[$j] < $array[$min]){
					$min = $j;
				}
			}
			$temp = $array[$i];
			$array[$i] = $array[$min];
			$array[$min] = $temp;
		}
	}

	$array = array(11,2,36,1,10,25,85,99,77);
	selectSort($array);
	print_r($array);