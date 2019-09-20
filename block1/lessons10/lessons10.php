<?php                                                      //Timestamp: time и mktime
    echo time();
echo '<br>';
?>

<?php
    echo mktime(0,0,0,3,1,2025);
echo '<br>';
?>

<?php
    echo mktime(0,0,0,12,31);
echo '<br>';
?>

<?php
    echo (time()-mktime(13,12,59,3,15,2000));
echo '<br>';
?>

<?php
    echo (int)((time()-mktime(7,23,48))/60/60);
echo '<br>';
?>

<?php                                                        //Функция date 
   echo date('Y-m-d H:i:s');
echo '<br>';
?>

<?php
    echo date('Y-m-d').'<br>';
    echo date('d.m.Y').'<br>';
    echo date('d.m.y').'<br>';
    echo date('H:i:s');
echo '<br>';
?>

<?php
    echo date('d.m.Y', mktime(0,0,0,2,12,2025));
    echo '<br>';
?>

<?php
    $week=['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    $day = date(w, mktime());
    echo $week[$day].'<br>';
    $dayx=date(w, mktime(0,0,0,3,8,1989));
    echo $week[$dayx].'<br>';
    $day1=date(w, mktime(0,0,0,6,6,2006));
    echo $week[$day1].'<br>';
    echo '<br>';
?>

<?php
    $month=[1=>'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec'];
    $a = date('n', mktime());
    echo $month[$a];
    echo '<br>';
?>

<?php
    echo date('t', mktime());
    echo '<br><br><br>';
?>

////////////////////////////////////////////////////////////////////////////////////////////////////

<?php
    if (empty($_REQUEST['year'])){
?>

<form action="" method="GET">
    <input type="text" name="year"><br><br>
    <input type="submit">
</form>

<?php
}
?>
<?php
    if (isset($_REQUEST['year'])){
        $year = date('L', mktime(0,0,0,1,1,$_REQUEST['year']));
        
            if ($year!=0){
                echo 'Visokosnij';
            }
            else echo 'Ne visokosnij';
        
    }
?>

<br><br>

//////////////////////////////////////////////////////////////////////////////////////////////////////
<br><br>

<?php
    if (empty($_REQUEST['name'])){
?>

<form action="" method="GET">
    <input type="text" name="name"><br><br>
    <input type="submit">
</form>

<?php
echo 'Введите дату в формате 31.12.2025';
}
?>
<?php
    if (isset($_REQUEST['name'])){
        $dt=explode('.', $_REQUEST['name']);
        $day = date('l', mktime(0,0,0,$dt[1],$dt[0],$dt[2]));
        echo $day;
    }
?>

<br><br>

////////////////////////////
<br><br>

<?php
    if (empty($_REQUEST['name'])){
?>

<form action="" method="GET">
    <input type="text" name="name"><br><br>
    <input type="submit">
</form>

<?php
echo 'Введите дату в формате 2025-12-31';
}
?>
<?php
    if (isset($_REQUEST['name'])){
        $dt1=explode('-', $_REQUEST['name']);
        $day = date('l', mktime(0,0,0,$dt1[1],$dt1[2],$dt1[0]));
        echo $day;
    }
?>

<br><br>

//////////////////////////                                        //Сравнение дат
<br><br>

Введите две даты в формате '2025-12-31'
<br><br>

<form action="" method="GET">
    <input type="text" name="date1"><br><br>
    <input type="text" name="date2"><br><br>
    <input type="submit">
</form>


<?php
    if (isset($_REQUEST['date1']) and isset($_REQUEST['date2'])){
        $date1=explode('-', $_REQUEST[date1]);
        $date2=explode('-', $_REQUEST[date2]);
        if (mktime(0,0,0,$date1[1],$date1[2],$date1[0])>mktime(0,0,0,$date2[1],$date2[2],$date2[0]))
            echo $_REQUEST[date1];
        else echo $_REQUEST[date1];
    }
?>

<br><br>

<?php                                                           //На strtotime 
    echo date('d-m-Y', strtotime('2025-12-31'));
?>



<br>//////////////////////////////////////////////////////////////////<br>

Введите время в формате '2025-12-31 12:13:59'
<br><br>

<form action="" method="GET">
    <input type="text" name="timedate"><br><br>
    
    <input type="submit">
</form>


<?php
    if (isset($_REQUEST['timedate'])){
        echo date('H:i:s d.m.Y', strtotime($_REQUEST[timedate]));
    }
?>

<br><br>

<?php                                                      //Прибавление и отнимание дат
    $date = '2025-12-31';
    $date = date_create($date);
    date_modify($date, '2 day');
    echo date_format($date, 'Y-d-m');
    echo '<br>';
?>

<?php
    $date = '2025-12-31';
    $date = date_create($date);
    date_modify($date, '3 days 1 month');
    echo date_format($date, 'Y-d-m');
    echo '<br>';
?>

<?php
    $date = '2025-12-31';
    $date = date_create($date);
    date_modify($date, '1 year');
    echo date_format($date, 'Y-d-m');
    echo '<br>';
?>

<?php
    $date = '2025-12-31';
    $date = date_create($date);
    date_modify($date, '-3 days');
    echo date_format($date, 'Y-d-m');
    echo '<br>';
?>

<?php                                                      //Задачи
    $a1=(mktime(23,59,59,12,31)-time())/60/60/24;
    echo (int)$a1;
?>


<br>//////////////////////////////////////////////////////////////////<br>

Введите год
<br><br>

<form action="" method="GET">
    <input type="text" name="tx"><br><br>
    
    <input type="submit">
</form>


<?php
    if (isset($_REQUEST['tx'])){
        $x=$_REQUEST['tx'];
        $a=strtotime('1.1.'.$_REQUEST['tx']);
        for ($i=0; $i<365; $i++){
            $a=strtotime('01.01'.$_REQUEST['tx'])+(60*60*24*$i);
            if (date(d, $a)==13 and date(w, $a)==5)
                $arr[]=date('d.m.', $a);


        }
        var_dump($arr);
    }
?>

<br><br>

<?php
echo date(l, strtotime("-100 days"));
echo '<br>'
?>