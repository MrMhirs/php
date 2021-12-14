<?php
$date = new DateTime();
$day = date('D');


if($day == "Mon"){
    print "We are on Monday";
}
else{
    print "We are not Monday";
}
?>

<br>

<?php
$date = new DateTime();
$month = date('n');

if($month == 10){
    print "We are in October";
}
else {
    print "We are not in October";
}
?>

<br>

<?php
$date = new DateTime();
$minutes= date('i');

if($minutes < 10){
    print ("the current minute is less than 10");
}
elseif($minutes < 15){
    print ("the current minute is more than 15");
}
else {
    print ("does not meet any conditions");
}
?>

<br>


<?php
$i = 2;
switch ($i) {
    case 0:
        echo "i equals 0";
    case 1:
        echo "i equals 1";
    case 2:
        echo "i equals 2";
}
?>