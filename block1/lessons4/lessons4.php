

<?php                                  //Работа с foreach
	$arr = ['html', 'css', 'php', 'js', 'jq'];
	foreach ($arr as $elem){
		echo $elem.'<br>';
	}
	echo '<br>';
?>


<?php
	$arr1 = [1,2,3,4,5];
	$result = 0;
	foreach ($arr1 as $elem){
		$result=$result + $elem;
	}
	echo $result;
echo '<br>';
?>


<?php
	$arr2 = [1,2,3,4,5];
	$result = 0;
	foreach ($arr2 as $elem){
		$result=$result + $elem*$elem;
	}
	echo $result;
echo '<br>';
?>

<?php                                  //Работа с ключами
	$arr3 = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
	foreach ($arr3 as $key => $elem){
		echo $key.' - '.$elem.'<br>';
	}
	echo '<br>';
?>


<?php
	$arr4 = ['Коля'=>200, 'Вася'=>300,'Петя'=>400];
	foreach ($arr4 as $key => $elem){
		echo $key.' - зарплата '.$elem.' долларов.'.'<br>';
	}
echo '<br>';
?>

<?php                                  //Циклы while и for 
	$i=1;
	while ($i<=100){
		echo $i.'<br>';
		$i++;
	}
echo '<br>';
?>


<?php
	for ($i=1; $i<=100; $i++){
		echo $i.'<br>';
	}
echo '<br>';
?>

<?php
	$i=11;
	while ($i<=33){
		echo $i.'<br>';
		$i++;
	}
echo '<br>';
?>


<?php
	for ($i=11; $i<=33; $i++){
		echo $i.'<br>';
	}
echo '<br>';
?>

<?php
	$i=0;
	while ($i<=100){
		echo $i.'<br>';
		$i+=2;
	}
echo '<br>';
?>


<?php
	for ($i=0; $i<=100; $i+=2){
		echo $i.'<br>';
	}
echo '<br>';
?>

<?php
	$i=1;
	$sum=0;
	while ($i<=100){
		$sum+=$i;
		$i++;
	}
	echo $sum;
echo '<br>';
?>


<?php
	$sum=0;
	for ($i=1; $i<=100; $i++){
		$sum+=$i;
	}
	echo $sum;
echo '<br>';
?>

<?php                                     //Задачи
	$arr5=[2, 5, 9, 15, 0, 4];
	foreach ($arr5 as $a){
		if ($a>3 and $a<10)
			echo $a.'<br>';
	}
echo '<br>';
?>

<?php
	$arr6=[2, -5, 9, 15, 0, -4];
	foreach ($arr6 as $a){
		if ($a>=0)
			echo $a.'<br>';
	}
echo '<br>';
?>

<?php
	$arr7=[1, 2, 5, 9, 4, 13, 4, 10];
	foreach ($arr7 as $a){
		if ($a==4){
			echo 'Есть!';
			break;
		}
	}
echo '<br>';
?>

<?php
	$arr8=['10', '20', '30', '50', '235', '3000'];
	foreach ($arr8 as $a){
		if ($a[0]==1 or $a[0]==2 or $a[0]==5){
			echo $a.' ';
			}
	}
echo '<br>';
?>

<?php
	$text = '-';
	$arr9=[1, 2, 3, 4, 5, 6, 7, 8, 9];
	foreach ($arr9 as $a){
		$text.=$a.'-';
	}
	echo $text;
echo '<br>';
?>

<?php
	$arr10=['пн','вт','ср','чт','пт','сб','вс'];
	foreach ($arr10 as $a){
		if ($a=='сб' or $a=='вс')
			echo '<b>'.$a.'</b>';
		else
			echo $a;
	}
	
echo '<br>';
?>

<?php
	$date=date(l);
	$arr11=['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];
	foreach ($arr11 as $a){
		if ($a==$date)
			echo '<i>'.$a.'</i>';
		else
			echo $a.' ';
		}
	
echo '<br>';
?>

<?php                           //задачи посложнее
	for ($i=1; $i<=100; $i++){
		$arr12[$i-1]=$i;
	}
	var_dump($arr12);
echo '<br>';
?>

<?php 
	$arr13=['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
	foreach ($arr13 as $k=>$s){
		$en2[]=$k;
		$ru2[]=$s;
	}
	var_dump($en2);
	var_dump($ru2);
echo '<br>';
?>

<?php
	$num=1000;
	$iter=0;
	while ($num>=50) {
		$num/=2;
		$iter++;
	}
	echo $iter;

echo '<br>';
?>

<?php
	$iter=0;
	for ($num=1000; $num>=50; $num/=2) {
		$iter++;
	}
	echo $iter;

echo '<br>';
?>