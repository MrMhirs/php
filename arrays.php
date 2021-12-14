<?php
$arrey = ("1,2,3,4,5");
echo $arrey;
?>

<br>

<?php
$arrey = ("1,2,3,4,5, 1.5, 5.5");
echo $arrey;
?>

<br>

<?php
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
?>

<br>

<?php
$names = array(
    'John',
    'Jason',
    'Martina',
    'Lisa',
    'Tony'
);

$numElements = count($names);
echo $numElements;
?>
<br>

<?php
$keys = ['sky', 'grass', 'orange'];
$values = ['blue', 'green', 'orange'];

$array = array_combine($keys, $values);
print_r($array);
?>
<br>

<?php
$arry =  array('sky', 'grass', 'orange');
print_r (end($arry));
?>
<br>

<?php
$arre =  array('sky', 'grass', 'orange');
array_push($arre, "pera");
print_r ($arre);
?>

