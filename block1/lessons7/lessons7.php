<?php                      // Работа с регистром символов
    echo strtoupper('php');
echo '<br>';
?>

<?php
    echo strtolower('PHP');
echo '<br>';
?>

<?php
    echo ucfirst('london');
echo '<br>';
?>

<?php
    echo lcfirst('London');
echo '<br>';
?>

<?php
    echo ucwords('london is the capital of great britain');
echo '<br>';
?>

<?php
    echo ucfirst(strtolower('LONDON'));
echo '<br>';
?>


<?php                               //Работа с substr
    echo substr('html css php', 0, 4).'<br>';
    echo substr('html css php', 5, 3).'<br>';
    echo substr('html css php', 9, 3).'<br>';

echo '<br>';
?>

<?php
    echo substr('qwertyuio', -3);
echo '<br>';
?>

<?php
    if (substr('http://qwerty.ru', 0, 7)=='http://')
        echo 'да';
    else echo 'нет';
echo '<br>';
?>

<?php
    if ((substr('https://qwerty.ru', 0, 7)=='http://') or (substr('https://qwerty.ru', 0, 8)=='https://'))
        echo 'да';
    else echo 'нет';
echo '<br>';
?>

<?php
    if (substr('qwerty.png', -4)=='.png')
        echo 'да';
    else echo 'нет';
echo '<br>';
?>

<?php
    if ((substr('qwerty.png', -4)=='.png') or (substr('qwerty.png', -4)=='.jpg'))
        echo 'да';
    else echo 'нет';
echo '<br>';
?>

<?php
$str='qwertyuiop';
    if (strlen($str)>5){
        echo substr($str, 0, 5).'...';
    }
    else
        echo $str;
echo '<br>'
?>

<?php                         //Работа с str_replace
    echo str_replace('.', '-','31.12.2013');
echo '<br>'
?>

<?php
$str='abcabc';
    echo str_replace(['a','b','c'], ['1','2','3'], $str);

echo '<br>'
?>

<?php
$str='1a2b3c4b5d6e7f8g9h0';
    echo str_replace([1,2,3,4,5,6,7,8,9,0], '', $str);

echo '<br>'
?>

<?php                         //Работа с strtr
    $str='1a2b3c4b5d6e7f8g9h0';
    echo strtr($str, ['a'=>'1', 'b'=>'2', 'c'=>'3']);
echo '<br>'
?>

<?php
    $str='1a2b3c4b5d6e7f8g9h0';
    echo strtr($str, 'abc', '123');
echo '<br>'
?>

<?php                         //Работа с substr_replace
    $str='1a2b3c4b5d6e7f8g9h0';
    echo substr_replace($str, '!!!', 2, 5);
echo '<br>'
?>

<?php                          //Работа с strpos, strrpos
    $str='abc abc abc';
    echo strpos($str, 'b');
echo '<br>'
?>

<?php
    $str='abc abc abc';
    echo strrpos($str, 'b');
echo '<br>'
?>

<?php
    $str='abc abc abc';
    echo strpos($str, 'b', 3);
echo '<br>'
?>

<?php
    $str='aaa aaa aaa aaa aaa';
    $a = strpos($str, ' ');
    echo strpos($str, ' ', $a+1);
echo '<br>'
?>

<?php
    $str='adrgh.fgfdhy';
    $a = strpos($str, '.');
    if (strpos($str, '.', $a+1)!=false)
        echo 'есть';
    else echo 'нет';
echo '<br>'
?>

<?php
    $str='http://site.ru';
    if (strpos($str, 'http://')===0)
        echo 'да';
    else echo 'нет';
echo '<br>'
?>

<?php                                //Работа с explode, implode
    $str='html css php';
    $arr= explode(' ', $str);
    echo var_dump($arr);
echo '<br>'
?>

<?php
    $arr1=['html', 'css', 'php'];
    echo implode(' ', $arr1);
echo '<br>'
?>

<?php
    $date='2013-12-31';
    $arr2 = explode('-', $date);
    $date=$arr2[2].'.'.$arr2[1].'.'.$arr2[0];
    echo $date;
echo '<br>'
?>

<?php                                //Работа с str_split
    $str='1234567890';
    var_dump(str_split($str, 2));
echo '<br>'
?>;


<?php
    $str='1234567890';
    var_dump(str_split($str, 1));
echo '<br>'
?>

<?php
    $str='1234567890';
    $arr3=(str_split($str, 2));
    $str=implode('-', $arr3);
    echo $str;
echo '<br>'
?>

<?php                                //Работа с trim, ltrim, rtrim
    echo trim(' qwerty ');
echo '<br>';
?>


<?php
    echo trim('/php/','/');
echo '<br>';
?>

<?php
   $str='слова слова слова.';
   echo rtrim($str, '.').'.';
echo '<br>';
?>

<?php                            //Работа с strip_tags и htmlspecialchars
   $str='html, <b>php</b>, js';
   echo strip_tags($str); 
echo '<br>';
?>


<?php
    $str='html, <b>php</b>, <i>js</i>';
   echo strip_tags($str, '<b><i>');
echo '<br>';
?>

<?php
  $str='html, <b>php</b>, js';
  echo htmlspecialchars($str);
echo '<br>';
?>

<?php                            //Работа с strstr
   $str='ab--cd--ef';
   echo strstr($str,'--'); 
echo '<br>';
?>

<?php                            //Задачи
   $str='var_test_text';
   $arr4=explode('_', $str);
   $a=count($arr4);
   for ($i=1; $i<$a; $i++){
        $arr4[$i]=ucfirst($arr4[$i]);
   } 
   $str=implode('', $arr4);
   echo $str;
echo '<br>';
?>

<?php
    $arr5=[2452,3531,43455,6788,162,35,7668,326,1112];
    for ($i=0; $i<count($arr5); $i++){
        if (stripos($arr5[$i], '3')!==false)
        {echo $arr5[$i].' ';}
           }
echo '<br>';
?>