<?php
	/*
	* 遍历文件夹和子文件夹
	*/
	function my_scandir($dir){
		$files = array();
		if(is_dir($dir)){
			if($handle = opendir($dir)){
				while(($filename = readdir($handle)) !== false){
					$filename = iconv('gbk', 'utf-8', $filename);
					if($filename != '.' && $filename != '..'){
						if(is_dir($dir . '/' . $filename)){
							$files[$filename] = my_scandir($dir . '/' . $filename);
						}else{
							$files[] = $dir . '/' .$filename;
						}
					}
				}
			}
			closedir($handle);
		}
		return $files;
	}

	$file_path = 'd:/workspace/Partition';
	echo '<pre>';
	var_dump(my_scandir($file_path));