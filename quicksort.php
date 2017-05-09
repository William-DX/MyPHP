<?php

	function quickSort(&$array, $left, $right){
		if($right <= $left) return;
		else{
			$pivot = $array[$right];
			$partition = partitionIt($array, $left, $right, $pivot);
			quickSort($array, $left, $partition - 1);
			quickSort($array, $partition + 1, $right);
		}
	}

	/*
	* 划分算法  
	* @param left 左指针
	* @param right 右指针
	* @param pivot 枢纽值
	*/
	function partitionIt(&$array, $left, $right, $pivot){
		$leftPtr = $left - 1;
		$rightPtr = $right;
		while(true){
			while($array[++$leftPtr] < $pivot);

			while($rightPtr > $left && $array[--$rightPtr] > $pivot);

			if($rightPtr <= $leftPtr){
				break;
			}else{
				swap($array, $leftPtr, $rightPtr);
			}
		}
		//交换枢纽到划分点上
		swap($array, $leftPtr, $right);

		return $leftPtr;
	}

	function swap(&$array, $index1, $index2){
		$temp = $array[$index1];
		$array[$index1] = $array[$index2];
		$array[$index2] = $temp;
	}


	$array = array(11,2,36,1,10,25,85,99,77);
	$start = microtime(true);
	quickSort($array, 0, count($array) - 1);
	$end = microtime(true);
	print_r($array);