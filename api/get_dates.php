<?php  include_once 'db.php';

$movie=$_GET['id'];
$ondate=strtotime($Movie->find($movie)['ondate']);
$end=strtotime("+2 days",$ondate);//結束時間=上映時間+2
$today=strtotime(date("Y-m-d"));
$diff=($end-$today)/(60*60*24);//結束的日期和今天差幾天
for($i=0;$i<=$diff;$i++){
    $date=date("Y-m-d",strtotime("+$i days"));
    echo "<option value='$date'>$date</option>";

}



?>