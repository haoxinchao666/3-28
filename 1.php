<?php 

$arr = [1,2,3,4,5,6];

$s = 5;


echo demo($arr,$s);

function demo($arr,$s)
{
	$len = count($arr);
	for ($i=1; $i <$len ; $i++) { 
		if($arr[$i]+$arr[$i+1] == $s){
         return $sum = $arr[$i]+$arr[$i+1];
		}
		
	}
}




 ?>
 