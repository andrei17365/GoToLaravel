

<?php               //обращение к символам строки
	$text='abcde!';
	echo $text[0];
	echo $text[2];
	echo $text[4];
?>

<?php
	$text='abcde!';
	$text[0]='!';
	echo $text;
?>

<?php
	$num='12345';
	echo $num[0]+$num[1]+$num[2]+$num[3]+$num[4];
?>