 <?php
include 'temp/head.php';
include 'temp/database.php';
include 'temp/navklient.php';
session_start();

$id_user=$_SESSION['id_user'];
if(!empty($_POST)){
$id_kours=$_POST['id_kours'];
$date=$_POST['date'];
$oplate=$_POST['oplate'];
$status=$_POST['status'];
$sql="INSERT INTO zayavka (id_user, id_kours, date, oplate, status) VALUES ('$id_user', '$id_kours', '$date', '$oplate', 'Новая')";
 $result=$mysqli->query($sql);
 if(!empty($result));
 header("location:person.php");
 exit;
}


?>



<div class="container"style="margin-left:500px;" >
<h1 style="color:blue;" >ЗАЯВКА</h1>
<form action=""method="POST">

    <div class="form-element">
<label for="">Выберите курс</label>
<select class="form-element" id="id_kours" name="id_kours" required>

<?php
$kours=$mysqli->query("SELECT id_kours, name_kours from kours");
foreach($kours as $list){
    echo '<option value="'.$list['id_kours'].'">'.$list['name_kours'].'</option>';
}


?>
</select><br><br>



<div class="form-element" >
<label for="date">Дата</label>
 <input type="date" name="date"  required><br><br>

</div>

<div class="form-element">
<label for="oplate">Оплата</label>
 <input type="text" name="oplate" required><br><br>

</div>

<input type="submit" value="Отправить" required><bt>


</form>
</div>
