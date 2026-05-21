<?php
include 'temp/head.php';
include 'temp/database.php';
include 'temp/navklient.php';
session_start();
?>
<h1 style="margin-left:300px;">ЛИЧНЫЙ КАБИНЕТ </h1>
<table class="table">
<tr>

<td>ЗАЯВКА</td>
<td>КУРСЫ</td>
<td>ДАТА</td>
<td>ОПЛАТА</td>
<td>СТАТУС</td>

</tr>
<?php
$sql="SELECT * FROM zayavka, kours where zayavka.id_kours=kours.id_kours and id_user='$id_user'";
$result=$mysqli->query($sql);
if(!empty($result))
    foreach($result as $row){
echo '<tr><td>'.$row['id_zayavka'].'</td>
<td>'.$row['name_kours'].'</td>
<td>'.$row['date'].'</td>
<td>'.$row['oplate'].'</td>
<td>'.$row['status'].'</td>
</tr>';
}

?>

</table>