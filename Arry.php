<?php 
// PHP program to Find the maximum 
// element in an array which is first 
// increasing and then decreasing 

$arr = 1; $low = 2; $high = 1;

function findMaximum($arr, $low, $high) 
{ 
$max = $arr[$low]; 
$i = ""; 
for ($i = $low; $i <= $high; $i++) 
{ 
	if ($arr[$i] > $max) 
		$max = $arr[$i]; 
} 
return $max; 
} 

// Driver Code 
$arr = array(1, 30, 40, 50, 
			60, 70, 23, 20); 
$n = count($arr); 
echo "The maximum element is ", 
	findMaximum($arr, 0, $n-1); 

// This code is contributed by anuj_67. 
?> 
