<?php
	
	//插入排序(由小到大)
	function insertSort(&$array){
		//定义两个指针
		$left;
		$right;

		//获取数组长度
		$length = count($array);
		for($right = 1; $right < $length; $right++){
			$tmp = $array[$right];
			$left = $right;
			while($left > 0 && $array[$left - 1] >= $tmp){
				$array[$left] = $array[$left - 1];
				--$left;
			}
			$array[$left] = $tmp;
		}
	}

	$array = array(11,2,36,1,10,25,85,99,77);
	insertSort($array);
	print_r($array);