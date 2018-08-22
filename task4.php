<!DOCTYPE html>
<html>
<head>
	<title>4. PHP. Тестовое задание</title>
</head>
<body>
	<h1>4. PHP. Тестовое задание</h1>
	<h2>Task 1</h2>

	<p>
		1. Написать функцию нахождения максимального числа в массиве любой вложенности.
		Не изменять входных аргументов функции.
	</p>
	<pre>
		function myMax($xs) {
			$max = 0;
			foreach($xs as $key=>$value){
				if(is_array($value)){
					if($max < myMax($value))
						$max = myMax($value);
				}else{
					if($max < $value)
						$max = $value;
				}
			}
			return $max;
		}
		 
		echo myMax([1, 2, [3, 4]]); // 4
	</pre>
<?php
 
	function myMax($xs) {
		$max = 0;
		foreach($xs as $key=>$value){
			if(is_array($value)){
				if($max < myMax($value))
					$max = myMax($value);
			}else{
				if($max < $value)
					$max = $value;
			}
		}
		return $max;
	}
	 
	echo myMax([1, 2, [3, 4]]); // 4

?>
	
	<h2>Task 2</h2>

	<p>
		2. Написать функцию для сортировки массива.
	</p>
	<pre>
		$list = [20, 10, -5, 0, 5];
    
		function mySort($list) {
			$result = array();
			while($list) { 
				$min = min($list);  
				$key = array_search($min, $list);  
				unset($list[$key]);  
				
				$result[] = $min;
			} 
			$GLOBALS['list'] = $result;
		}
		
		mySort($list);
		
		print_r($list); // -5, 0, 5, 10, 20
	</pre>	
<?php

    $list = [20, 10, -5, 0, 5];
    
    function mySort($list) {
		$result = array();
		while($list) { 
			$min = min($list);  
			$key = array_search($min, $list);  
			unset($list[$key]);  
			
			$result[] = $min;
		} 
		$GLOBALS['list'] = $result;
    }
    
    mySort($list);
    
    print_r($list); // -5, 0, 5, 10, 20
	
?>
</body>
</html>