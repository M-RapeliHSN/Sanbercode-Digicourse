<?php

include("animal.php");
include("frog.php");
include("ape.php");

$sheep = new animal("shaun");

echo "Name: " . $sheep->name . "<br>";
echo "legs: " . $sheep->legs . "<br>";
echo "Cold Blooded: " . $sheep->cold_blooded . "<br>" . "<br>";

$frog = new katak("Buduk");

echo "Name: " . $frog->name . "<br>";
echo "legs: " . $frog->legs . "<br>";
echo "Cold Blooded: " . $frog->cold_blooded . "<br>";
echo "Jump: " . $frog->jump() . "<br>" . "<br>";

$ape = new Kera("Kera Sakti");

echo "Name: " . $ape->name . "<br>";
echo "legs: " . $ape->legs . "<br>";
echo "Cold Blooded: " . $ape->cold_blooded . "<br>";
echo "Yell: " . $ape->yell() . "<br>" . "<br>";



?>