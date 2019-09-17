

<?php               //многомерные массивы
	$arr = [
    'cms'=>['joomla', 'wordpress', 'drupal'],
    'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
	];
	echo $arr['cms'][0];
	echo $arr['cms'][2];
	echo $arr['colors']['green'];

?>

<?php
	$arr1 = [
	'ru'=>[1=> 'понедельник','вторинк','среда','четверг','пятница','суббота','воскресенье'],
	'en'=>['Monday','Tuesday','Wednes­day','Thursday','Friday','Saturday','Sunday']
	];
	echo $arr1['ru'][1];
	echo $arr1['en'][2];

	$lang ='en';
	$day=4;
	echo $arr1[$lang][$day];

?>