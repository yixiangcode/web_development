<?php

$result = 49;
$grade = "A";


if ($result >= 50){
    echo "The result is ".$result." is pass.";
}else{
    echo "The result is ".$result." is fail.";
}
echo "<br><br>";

for($a = 0; $a <= 10; $a++){
    echo "The number is ".$a.". <br><br>";
}
$car = array("Volvo", "BMW", "Toyota");
echo "I like ".$car[0].", ".$car[1]." and ".$car[2].".<br><br>";

$age = array("Peter"=>"35", "Ben"=>"27");
echo "Peter is ".$age["Peter"]." years old.<br><br>";
// column row [][]
$cars = array(array("Volvo", 20, 18), array("BMW", 15, 13), array("Toyota", 14, 9));
echo $cars[0][0]." in STOCK : ".$cars[0][1]." SOLD : ".$cars[0][2]."<br>";
echo $cars[1][0]." in STOCK : ".$cars[1][1]." SOLD : ".$cars[1][2]."<br>";
echo $cars[2][0]." in STOCK : ".$cars[2][1]." SOLD : ".$cars[2][2]."<br>";

?>