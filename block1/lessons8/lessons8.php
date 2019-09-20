<?php                     //Работа с count 
    $arr = [1,2,3,4,5,6,7,8,9,0];
    echo count($arr);
    echo '<br>';
?>

<?php
    $arr = [1,2,3,4,5,6,7,8,9,0];
    echo $arr[count($arr)-1];
    echo '<br>';
?>

<?php                      //Работа с in_array 
    $arr = [1,2,3,4,5,6,7,8,9,0];
    var_dump(in_array(3, $arr));
    echo '<br>';
?>

<?php                       //Работа с array_sum и array_product
    echo array_sum([1,2,3,4,5]);
    echo '<br>';
?>

<?php
    echo array_product([1,2,3,4,5]);
    echo '<br>';
?>

<?php
    $arr1=[1,2,3,4,5];
    echo array_sum($arr1)/count($arr1);
    echo '<br>';
?>

<?php                       //Работа с range
   $arr2=range(1, 100);
   echo var_dump($arr2);
   echo '<br>';
?>

<?php
    $arr3=range(a, z);
   echo var_dump($arr3);
   echo '<br>';
?>

<?php
    $arr4=range(1, 9);
    echo implode('-', $arr4);
    echo '<br>';
?>

<?php
    $arr5=range(1, 100);
    echo array_sum($arr5);
    echo '<br>';
?>

<?php
    $arr5=range(1, 5);
    echo array_product($arr5);
    echo '<br>';
?>

<?php                       //Работа с array_merge 
    $arr6=[1,2,3];
    $arr7=['a','b','c'];
    $sum=array_merge($arr6, $arr7);
    var_dump($sum);
   echo '<br>';
?>

<?php                       //Работа с array_slice 
    $arr8=[1,2,3,4,5];
    $result=array_slice($arr8, 1, 3);
    echo var_dump($result);
    echo '<br>';
?>

<?php                       //Работа с array_splice 
    $arr9=[1,2,3,4,5];
    array_splice($arr9, 1, 2);
    echo var_dump($arr9);
    echo '<br>';
?>

<?php                        
    $arr10=[1,2,3,4,5];
    $arr11=array_splice($arr10, 1, 3);
    echo var_dump($arr11);
    echo '<br>';
?>

<?php                       
    $arr12=[1,2,3,4,5];
    array_splice($arr12, 3, 0, [a,b,c]);
    echo var_dump($arr12);
    echo '<br>';
?>

<?php                       
    $arr12=[1,2,3,4,5];
    array_splice($arr12, 1, 0, [a,b]);
    array_splice($arr12, 6, 0, [c]);
    array_splice($arr12, 8, 0, [e]);
    echo var_dump($arr12);
    echo '<br>';
?>

<?php                   //Работа с array_keys, array_values, array_combine
    $arr13=['a'=>1, 'b'=>2, 'c'=>3];
    echo var_dump(array_keys($arr13));
    echo var_dump(array_values($arr13));
    echo '<br>';
?>

<?php
    $arr14=['a','b','c'];
    $arr15=[1,2,3];
    echo var_dump(array_combine($arr14, $arr15));
    echo '<br>';
?>

<?php                   //Работа с array_flip, array_reverse 
    $arr16=['a'=>1, 'b'=>2, 'c'=>3];
    $result1=array_flip($arr16);
    var_dump($result1);
    echo '<br>';
?>

<?php
    $arr17=[1,2,3,4,5];
    var_dump(array_reverse($arr17));
    echo '<br>';
?>

<?php                   //Работа с array_search 
    $arr18=['a', '-', 'b', '-', 'c', '-', 'd'];
    echo array_search('-', $arr18);
    echo '<br>';
?>

<?php
    $arr19=['a', '-', 'b', '-', 'c', '-', 'd'];
    array_splice($arr19, array_search('-', $arr19), 1);
    var_dump($arr19);
    echo '<br>';
?>

<?php                   //Работа с array_replace
    $arr20=['a', 'b', 'c', 'd', 'e'];
    $result2=array_replace($arr20, [0=>'!', 2=>'!!']);
    var_dump($result2);
    echo '<br><br>';
?>

<?php                   //Работа с сортировкой
    $arr21=['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
    sort($arr21);
    var_dump($arr21);
    echo '<br>';
    $arr22=['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
    rsort($arr22);
    var_dump($arr22);
    echo '<br>';
    $arr23=['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
    asort($arr23);
    var_dump($arr23);
    echo '<br>';
    $arr24=['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
    arsort($arr24);
    var_dump($arr24);
    echo '<br>';
    $arr25=['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
    ksort($arr25);
    var_dump($arr25);
    echo '<br>';
    $arr26=['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
    krsort($arr26);
    var_dump($arr26);
    echo '<br>';
    $arr27=['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
    usort($arr27);
    var_dump($arr27);
    echo '<br>';
    $arr28=['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
    uasort($arr28);
    var_dump($arr28);
    echo '<br>';
    $arr29=['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
    uksort($arr29);
    var_dump($arr29);
    echo '<br>';
    $arr30=['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
    natsort($arr30);
    var_dump($arr30);
    echo '<br>';    
?>

<?php                   //Работа с array_search 
    $arr31=['a'=>1, 'b'=>2, 'c'=>3];
    echo array_rand($arr31);
    echo '<br>';
?>

<?php
    $arr32=['a'=>1, 'b'=>2, 'c'=>3];
    echo $arr32[array_rand($arr32)];
    echo '<br>';
?>

<?php                   //Работа с shuffle 
    $arr33=[1,2,3,4,5,6,7,8,9];
    shuffle($arr33);
    var_dump($arr33);
    echo '<br>';
?>

<?php
    $arr34=range(1, 25);
    shuffle($arr34);
    var_dump($arr34);
    echo '<br>';
?>

<?php
    $arr35=range(a, z);
    shuffle($arr35);
    var_dump($arr35);
    echo '<br>';
?>

<?php
    $arr36=range(a, f);
    shuffle($arr36);
    var_dump($arr36);
    echo '<br>';
?>

<?php                   //Работа с array_unique 
    $arr37=['a', 'b', 'c', 'b', 'a'];
    $arr37=array_unique($arr37);
    var_dump($arr37);
    echo '<br>';
?>

<?php                   //Работа с array_shift, array_pop, array_unshift, array_push 
    $arr38=[1,2,3,4,5];
    echo array_shift($arr38);
    echo '<br>';
    echo array_pop($arr38);    
    echo '<br>';
?>

<?php
    $arr39=[1,2,3,4,5];
    array_unshift($arr39, 0);
    echo array_push($arr39, 6);
    var_dump($arr39);    
    echo '<br>';
?>

<?php
    $arr40=[1,2,3,4,5,6,7,8];
    while(count($arr40)>0){
        echo array_shift($arr40);
        echo array_pop($arr40);
    }
echo '<br>';
?>

<?php                   //Работа с array_pad, array_fill, array_fill_keys, array_chunk
    $arr41=[1,2,3];
    $arr41=array_pad($arr40, 6, '-');
    var_dump($arr41);   
    echo '<br>';
?>

<?php
    $arr42=array_fill(0, 10, 'x');
    var_dump($arr42);
    echo '<br>';
?>

<?php
    $arr43=range(1, 20);
    var_dump(array_chunk($arr43, 4));
echo '<br>';
?>

<?php                   //Работа с array_count_values
    $arr44=['a', 'b', 'c', 'b', 'a'];
    var_dump(array_count_values($arr44));   
    echo '<br>';
?>

<?php                   //Работа с array_map 
    $arr45=[1,2,3,4,5];
    $arr46=array_map("sqrt", $arr45);
    var_dump($arr46);   
    echo '<br>';
?>

<?php 
    $arr47=['<b>php</b>', '<i>html</i>'];
    $arr48=array_map("strip_tags", $arr47);
    var_dump($arr48);   
    echo '<br>';
?>

<?php 
    $arr49=[' a ', ' b ', ' c '];
    $arr50=array_map("trim", $arr49);
    var_dump($arr50);   
    echo '<br>';
?>

<?php                   //Работа с array_intersect, array_diff
    $arr51=[1, 2, 3, 4, 5];
    $arr52=[3, 4, 5, 6, 7];
    $arr53=array_intersect($arr51, $arr52);
    var_dump($arr53);
    echo '<br>';
?>

<?php 
    $arr54=[1, 2, 3, 4, 5];
    $arr55=[3, 4, 5, 6, 7];
    $arr56=array_diff($arr54, $arr55);
    var_dump($arr56);
    echo '<br>';
?>

<?php                          //Задачи     
    $str='1234567890';
    $arr57=str_split($str);
    echo array_sum($arr57);
    echo '<br>';
?>

<?php  
    $arr58=range('a','z');
    $arr59=range(1, 26);
    $arr60=array_combine($arr58, $arr59);
    var_dump($arr60);
    echo '<br>';
?>

<?php  
    $arr61=range(1,9);
    $arr62=array_chunk($arr61, 3);
    var_dump($arr62);
    echo '<br>';
    echo '<br>';
?>

<?php  
    $arr63=[1,2,4,5,5];
    $arr64=array_unique($arr63);
    rsort($arr64);
    echo $arr64[1];
    echo '<br>';
?>