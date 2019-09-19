//Задача 1<br>
<form action="" method="GET">
    <input type="text" name="user"><br>
    <input type="submit">
</form>

<?php
    if (!empty($_REQUEST['user'])){
        $name=$_REQUEST['user'];
        echo 'Привет, '.$name;
    }
?>    

<br>
//Задача 2<br>
<form action="" method="GET">
    <input type="text" name="name"><br><br>
    <input type="text" name="age"><br><br>
    <textarea name="message"></textarea><br><br>
    <input type="submit">
</form>

<?php
    if(!empty($_REQUEST['name'])){
        $name=strip_tags($_REQUEST['name']);
        if(!empty($_REQUEST['age'])){
            $age=strip_tags($_REQUEST['age']);
            if(!empty($_REQUEST['message'])){
                $message=strip_tags($_REQUEST['message']);
                echo 'Привет, '.$name.', '.$age.' лет.<br>Твое сообщение: '.$message;
            }
        }
    }
?>

<br>
//Задача 3<br>

<?php
    if (empty($_REQUEST['age'])){
?>

<form action="" method="GET">
    <input type="text" name="age"><br><br>
    <input type="submit">
</form>

<?php
}
?>
<?php
    if (isset($_REQUEST['age'])){
        $age = strip_tags($_REQUEST['age']);
        echo 'Ваш возраст - '.$age.' лет';
    }
?>

<br><br>
//Задача 4<br>
<form action="" method="GET">
    <input type="text" name="login"><br><br>
    <input type="password" name="pass"><br><br>
    <input type="submit" name="submit">
</form>

<?php
    if (isset($_REQUEST['submit'])){
        $login='user';
        $pass='123456';
        $formLogin = trim($_REQUEST['login']);
        $formPass = trim($_REQUEST['pass']);
        if($login==$formLogin and $pass==$formPass){
            echo 'Доступ разрешен!';
        }
        else echo 'Доступ запрещен!';
    }
?>

<br><br>
//Задача 5<br>
    <form action="" method="GET">
    <input name="name" value="<?php if (isset($_GET['name'])) echo $_GET['name']; ?>">
    <input type="submit">
</form>
<?php
    if (isset($_REQUEST['submit'])) {
        $name = $_REQUEST['name'];
        echo $name;
    }
?>

<br><br>
//Задача 6<br>
<form action="" method="GET">
    <input name="name" value="<?php if (isset($_GET['name'])) echo $_GET['name']; ?>">
    <textarea name="message">
        <?php if (isset($_GET['message'])) echo $_GET['message']; ?>
    </textarea>
    <input type="submit">
</form>