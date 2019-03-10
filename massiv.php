<?php
include_once "db.php";

$a = array();
for ($i = 0; $i < 4; $i++) {
    $a[]=rand(0,9);
}

while ($a[1] == $a[2]){
    $a[1]= rand(0,9);
}

while ($a[2] == $a[1] || $a[2] == $a[0]){
    $a[2]= rand(0,9);
}

while ($a[3] == $a[2] || $a[3] == $a[1] || $a[3] == $a[0]){
    $a[3]= rand(0,9);
}

$b = array();
$sql= "UPDATE rmass SET firs=$a[0], secon=$a[1], third=$a[2], fourth=$a[3] WHERE id=1"; //запись в базу массива

if ($mysqli->query($sql) === TRUE) {
    echo "</br> Игра началась!";
}
else {
    echo  "<br/>Произошла ошибка!";
}

$mysqli->close();

?>