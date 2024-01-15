<?php  include_once 'db.php';

$movie=$_GET['id'];
$ondate=$Movie->find($movie)['ondate'];
$today=date("Y-m-d");
// ondate+1 > $today

for($i=0;$i<3;$i++){
    $date=strtotime("+$i days",strtotime($ondate));

    if($date>=strtotime($today)){
        $str=date("Y-m-d",$date);
        echo "<option value='{$str}'>$str</option>";

    }

}



?>