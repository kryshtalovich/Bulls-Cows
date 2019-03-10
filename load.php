<?php
include_once "db.php";
$select = $mysqli->query("SELECT firs, secon, third, fourth FROM rmass WHERE id=1");

$c = array();
while ($result = mysqli_fetch_array($select)){

    $c[0]=$result['firs'];
    $c[1]=$result['secon'];
    $c[2]=$result['third'];
    $c[3]=$result['fourth'];
}
$mysqli->close();
?>