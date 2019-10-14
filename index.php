<?php

include_once "classes\Room.php";
include_once "classes\Pit.php";

$establishments[] = new Room("the room",49, "none",50,80,50 );
$establishments[] = new Room("the flat",149, "food jars",120, 80, 80 );
$establishments[] = new Pit("the pit",69, "Hamster training gloves, Hamster punching sack ",20);


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Megahamster</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>price</th>
            <th>specialEquipment</th>
            <th>Size</th>
            <th>Area</th>
        </tr>
        <?php
        foreach ($establishments as $establishment){
            echo <<<OUTPUT
            <tr>
                <td>{$establishment->getName()}</td>
                <td>{$establishment->getPrice()}</td>
                <td>{$establishment->getSpecialEquipment()}</td>
                <td>{$establishment->getSize()}</td>
                <td>{$establishment->getArea()}</td>
            </tr>
OUTPUT;
        }

        ?>
    </table>
</body>
</html>
