<?php
include 'temp/head.php';
include 'temp/database.php';
include 'temp/nav.php';

if(!empty($_POST)){
$fio=$_POST['fio'];
$login=$_POST['login'];
$password=$_POST['password'];
$password2=$_POST['password2'];
$date_rod=$_POST['date_rod'];
$email=$_POST['email'];
$phone=$_POST['phone'];

if($password!==$password2){

}
else{
     $fio=$mysqli->real_escape_string($fio);
    $login=$mysqli->real_escape_string($login);
     $password=$mysqli->real_escape_string($password);
 $date_rod=$mysqli->real_escape_string($date_rod);
 $email=$mysqli->real_escape_string($email);
 $phone=$mysqli->real_escape_string($phone);
 $sql="INSERT INTO users(fio, login, password, date_rod, email, phone) VALUES ('$fio', '$login', '$password', '$date_rod', '$email', '$phone')";
 $result=$mysqli->query($sql);
 if(!empty($result));
 header("location:login.php");
 exit;
}
}

?>



<div class="container" style="margin-left:500px;" >
<h1 style="color:blue;" >РЕГИСТРАЦИЯ</h1>
<form action=""method="POST">

    <div class="form-element">
<label for="fio">Введите имя</label><br>
 <input type="text" name="fio" placeholder="Симмволы  кириллицы" pattern="^[А-яа-яЁё-\s]+$" required><br>


<div class="form-element">
<label for="login">Введите логин</label><br>
 <input type="text" name="login"required><br>

</div>

<div class="form-element">
<label for="password">Введите пароль</label><br>
 <input type="password" name="password" pattern= .{6,}  placeholder="Минимум 6 символов"  required><br>

</div>

<div class="form-element">
<label for="password2">Подвердите пароль</label><br><br>
 <input type="password" name="password2"  required><br>

</div>

<div class="form-element">
<label for="date_rod">Введите дату рождению</label><br>
 <input type="date" name="date_rod"  required><br>

</div>

<div class="form-element">
<label for="email">Введите почту</label><br>
 <input type="text" name="email"  required><br>

</div>

<div class="form-element">
<label for="phone">Введите телефон</label><br>
 <input type="text" name="phone" pattern="+7(d{3}\)-d{3)\-d{2}\-d{2}"   placeholder="+7(XXX)-XXX-XX-XX" required><br><br>

</div>

<input type="submit" value="Зарегистрироваться" style="background-color:blue;   color:white;"  required><bt>


</form>
</div>