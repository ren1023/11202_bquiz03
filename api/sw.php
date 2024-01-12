<!-- 處理院線片電影的排序功能 -->

<?php include_once "db.php";
// $table=$_POST(['table']);
$DB=new DB($_POST['table']);
$row=$DB->find($_POST['id']);
$sw=$DB->find($_POST['sw']);

$tmp=$row['rank'];
$row['rank']=$sw['rank'];
$sw['rank']=$tmp;

$DB->save($row);
$DB->save($sw);

?>