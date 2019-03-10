
<!DOCTYPE html>
<html>

<head>
    <title>Быки и коровы</title>
</head>

<body>
<form name="Num" action="" method="post">
    <input type="submit" name="newgame" value="Новая игра"/></br></br>
    <input type="number" name="f" placeholder="Первое число"/></br></br>
    <input type="number" name="s" placeholder="Второе число"/></br></br>
    <input type="number" name="t" placeholder="Третье число"/></br></br>
    <input type="number" name="fo" placeholder="Четвертое число"/></br></br>
    <input type="submit" name="submit" value="Проверить"/></br></br>

</form>

<?php

if (isset($_POST["newgame"])) {

    require "massiv.php";
}
require_once "db.php";

$dbmass = $_POST ["$a"];

print_r($dbmass);

echo '<br>';

if ($_POST["submit"]){
    $b = array();
    $b[0] = $_POST ['f'];
    $b[1] = $_POST ['s'];
    $b[2] = $_POST ['t'];
    $b[3] = $_POST ['fo'];

    $str = implode("", $b);

    require "load.php";
}
echo '<br>';

echo '<br>';

function buki($c, $b)
{
    $cow = 0;
    $bull = 0;
    $count = count($b);
    for ($i = 0; $i < $count; $i++) {
        if ($c[$i] == $b[$i]) {
            $bull = $bull + 1;
        } else {
            for ($k = 0; $k < $count; $k++) {
                if ($c[$i] == $b[$k]) {
                    $cow = $cow + 1;
                }

            }
        }

    }
    $null = $count - ($bull + $cow);
    return 'Количество быков:' . $bull . '</br>Количество коров:' . $cow . '</br>Неверных цифр:' . $null . '';
}

echo buki($c, $b) . '<br>';
?>

    <tr>
        <td>До этого Вы вводили:</td>
        <td> <?php echo $str; ?> </td>
    </tr>

</body>

</html>