

<?php                                  //Работа с if-else
	$a=0;
	if ($a==0) echo 'верно'; else echo 'неверно';
?>

<?php
	$a=1;
	if ($a>0) echo 'верно'; else echo 'неверно';
?>

<?php
	$a=1;
	if ($a<0) echo 'верно'; else echo 'неверно';
?>

<?php
	$a=1;
	if ($a>=0) echo 'верно'; else echo 'неверно';
?>

<?php
	$a=1;
	if ($a<=0) echo 'верно'; else echo 'неверно';
?>

<?php
	$a=1;
	if ($a!=0) echo 'верно'; else echo 'неверно';
?>

<?php
	$a='3';
	if ($a=='test') echo 'верно'; else echo 'неверно';
?>

<?php
	$a='1';
	if ($a==='1') echo 'верно'; else echo 'неверно';
?>

<?php                                 //Работа с empty и isset
	$a='0';
	if (empty($a)) echo 'верно'; else echo 'неверно';
?>

<?php    
	$a='0';
	if (!empty($a)) echo 'верно'; else echo 'неверно';
?>

<?php    
	$a=null;
	if (isset($a)) echo 'верно'; else echo 'неверно';
?>

<?php    
	$a=null;
	if (!isset($a)) echo 'верно'; else echo 'неверно';
?>

<?php    			                   //Работа с логическими переменными 
	$var=true;
	if ($var==true) echo 'верно'; else echo 'неверно';
?>

<?php    
	$var=false;
	if ($var) echo 'верно'; else echo 'неверно';
?>

<?php    			                   
	$var=true;
	if ($var!=true) echo 'верно'; else echo 'неверно';
?>

<?php    
	$var=false;
	if (!$var) echo 'верно'; else echo 'неверно';
?>

<?php    			                   //Работа с OR и AND  
	$a=5;
	if ($a>0 and $a<5) echo 'верно'; else echo 'неверно';
?>

<?php
	$a=1;
	if ($a==0 or $a==2) $a+=7; else $a/=10;
	echo $a;
?>

<?php
	$a=1;
	$b=3;
	if ($a<=1 and $b>=3) echo $a+$b; else $a-$b;
?>

<?php
	$a=0;
	$b=18;
	if (($a>2 and $a<11) or ($b>=6 and $b<14)) echo 'верно'; else echo 'неверно';
?>

<?php    			                   //На switch-case   
	$num=3;
	switch ($num) {
		case '1':
		echo 'Зима';
		break;
		case '2':
		echo 'Лето';
		break;
		case '3':
		echo 'Весна';
		break;
		case '4':
		echo 'Осень';
		break;
		}
?>

<?php                                   //Задачи
	$day=3;
	if ($day>0 and $day<=10) echo 1;
	elseif ($day>10 and $day<=20) echo 2;
	else echo 3;
?>

<?php
	$month = 5;
	if ($month==12 or $month==1 or $month==2) echo 'Зима';
	if ($month==3 or $month==4 or $month==5) echo 'Весна';
	if ($month==6 or $month==7 or $month==8) echo 'Лето';
	if ($month==9 or $month==10 or $month==11) echo 'Осень';
?>

<?php
	$year = 1600;
	if (($year%4==0 and $year%100!=0) or $year%400==0 ) echo 'Високосный';
	else echo 'Не високосный';
?>

<?php
	$text="abcde";
	if ($text[0]=='a') echo 'да';
	else echo 'нет';
?>

<?php
	$text="12345";
	if ($text[0]>0 and $text[0]<=3) echo 'да';
	else echo 'нет';
?>

<?php
	$text="123";
	echo $text[0]+$text[1]+$text[2];
?>

<?php
	$text="123213";
	$sum1=$text[0]+$text[1]+$text[2];
	$sum2=$text[3]+$text[4]+$text[5];
	if ($sum1==$sum2) echo 'да';
	else echo 'нет';
?>












