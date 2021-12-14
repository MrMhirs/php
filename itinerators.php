<!DOCTYPE html>
<html>
<body>

<?php
for ($x = 0; $x <= 10; $x++) {
echo "The number is: $x <br>";
}
?>

<br>


<?php
$name = array ("Robert","Sergio","Roger");

foreach ($name as $value) {
echo "$value <br>";
}
?>

<br>

<?php
$i = 10;

while ($i <= 100){
    echo "The number is : $i <br>";
    $i+=10;
}
?>

<br>

<?php
$i = 10;

do {
    echo "The number is: $i <br>";
    $i++;
} while ($i <= 5);

?>




</body>
</html>