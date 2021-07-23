<?php  
require_once 'animal.php';
require_once 'frog.php';
require_once 'ape.php';

$sheep = new Animal("shaun");

echo "Name : " . $sheep->name . "<br>";
echo "Legs : " . $sheep->legs . "<br>";
echo "Cold Blooded : " . $sheep->cold_blooded . "<br>";
echo "<br>";

$katak = new Frog("buduk");

echo "Name : " . $katak->name . "<br>";
echo "Legs : " . $katak->legs . "<br>";
echo "Cold Blooded : " . $katak->cold_blooded . "<br>";
echo "Jump : " . $katak->jump() . "<br>";
echo "<br>";

$kera = new Ape("kera sakti");

echo "Name : " . $kera->name . "<br>";
echo "Legs : " . $kera->legs . "<br>";
echo "Cold Blooded : " . $kera->cold_blooded . "<br>";
echo "Yell : " . $kera->yell() . "<br>";
?>