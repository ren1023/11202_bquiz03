<?php include_once "db.php";
// $table=$_POST(['table']);
$DB=new DB($_POST['table']);
$row=$DB->find($_POST['id']);
$sw=$DB->find($_POST['sw']);//使用sw這個變數傳來的index的值，撈出這筆資料叫$sw的陣列

$tmp=$row['rank'];
$row['rank']=$sw['rank'];
$sw['rank']=$tmp;

$DB ->save($row);
$DB->save($sw);

?>