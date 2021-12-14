<?php
echo ("textStrings");
?>

<br>

<?php
$textStrings = ("Hello World");
echo ("$textStrings");
?>

<br>

<?php
$texto = ("Hello");
$texto2 = ("World2");
echo ($texto),($texto2),("$textStrings");
?>
<br>


<?php
echo str_replace ("Hello", "World", "Hello Robert");
?>
<br>


<?php
$src_rep = ("That is A test sentence for str_replace.
</br>That is B test sentence for str_replace.
</br>That is C test sentence for str_replace.");
$count = 1;
echo str_ireplace("is","<span>was</span>",$src_rep,$count);
?>

<br>

<?php
$ntimes = "text";
echo str_repeat($ntimes, 10);
?>
<br>

<?php
$myString = "This is a short string";
$strLength = strlen ($myString);
echo "The string length is $strLength.<br>";
?>

<br>
<?php

echo strpos("I love php, I love php too!","php");
?>

<br>
<?php
$fi = "bonjour tout le monde";
$fu = "BONJOUR TOUT LE MONDE";

$fi = ucfirst($fi);
$fu = ucfirst(strtolower($fu));
echo $fu;
?>
<br>

<?php
echo substr("Hello world",6);
?>