<?php
include 'temp/head.php';
session_start();
include 'temp/database.php';
include 'temp/nav.php';

$message="";
if(!empty($_POST)&& isset($_POST['login'])&& isset($_POST['password'])){
    $login=trim($_POST['login']);
    $password=trim($_POST['password']);

    $login=$mysqli->real_escape_string($login);
     $password=$mysqli->real_escape_string($password);

     $sql="SELECT * FROM users where login='$login' and password='$password'";
     $result=$mysqli->query($sql);
     if($result->num_rows===0){
        $message="Неверный логин или пароль";
        echo $message;
     }
     else{
        $user=$result->fetch_assoc();
    
        $_SESSION['id_user']=$user['id_user'];
$_SESSION['login']=$user['login'];
$_SESSION['password']=$user['password'];
if($user['login']=="Admin26" && $user['password']=="Demo20"){
    header("location:admin.php");
    exit;
}
else{
    header("location:zayavka.php");
    exit;
}
     }
    
}

?>


<div class="container" style="margin-left:500px;">
<h1 style="color:blue;">АВТОРИЗАЦИЯ</h1>
<form action=""method="POST">
    
<div class="form-element">
<label for="login">логин</label>
 <input type="text" name="login"required><br>

</div><br>

<div class="form-element">
<label for="password">пароль</label>
 <input type="password" name="password"required><br><br>

</div>

<input type="submit" value="Войти"  style="background-color:blue;   margin-left:100px; color:white;" required><bt>


</form>
</div>