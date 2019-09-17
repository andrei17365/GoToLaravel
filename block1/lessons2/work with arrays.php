

<?php               //работа с массивами
	$arr=['a','b','c'];
	var_dump($arr);
	echo $arr[0];
	echo $arr[1];
	echo $arr[2];
?>

<?php
	$arr=['a','b','c','d'];
	echo $arr[0].'+'.$arr[1].', '.$arr[2].'+'.$arr[3];
?>

<?php
	$arr=[2,5,3,9];
	$result=$arr[0]*$arr[1]+$arr[2]*$arr[3];
	echo $result;
?>

<?php
	$arr1[]=1;
	$arr1[]=2;
	$arr1[]=3;
	$arr1[]=4;
	$arr1[]=5;
	var_dump($arr1);
?>