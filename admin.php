<?php
include 'temp/head.php';
include 'temp/database.php';
include 'temp/navadmin.php';
?>
<h1 style="margin-left:300px;">ЛИЧНЫЙ КАБИНЕТ АДМИНИСТРАТОРА</h1>
<table class="table">
<tr>

<td>ЗАЯВКА</td>
<td>КЛИЕНТ</td>
<td>КУРСЫ</td>
<td>ДАТА</td>
<td>ОПЛАТА</td>
<td>СТАТУС</td>

</tr>
<?php
$sql="SELECT * FROM zayavka, users where zayavka.id_user=users.id_user";
$result=$mysqli->query($sql);
if(!empty($result))
    foreach($result as $row){
echo '<tr><td>'.$row['id_zayavka'].'</td>
<td>'.$row['fio'].'</td>
<td>'.$row['id_kours'].'</td>
<td>'.$row['date'].'</td>
<td>'.$row['oplate'].'</td>
<td>'.$row['status'].'</td>
<td><form action="change.php" method="POST">
<input type="hidden" name="id_zayavka"value="'.$row['id_zayavka'].'">
<input type="submit" value="Одобрить">
</form></td><td><form action="change1.php" method="POST">
<input type="hidden" name="id_zayavka"value="'.$row['id_zayavka'].'">
<input type="submit" value=" Завершить">
</form></td></tr>';
}

?>

</table>