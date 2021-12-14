<?php
function sumar ($a, $b){
    return $a + $b;
}
echo sumar(2,2);
?>

<br>

<?php
function multi ($a, $b){
    return $a * $b;
}
echo multi(2,2);
?>

<br>

<?php
function dividir ($a, $b){
    return $a / $b;
}
echo dividir(2,2);
?>

<br>

<?php
function multiadd ($a, $b, $c){
    if ($c == "+"){
        return sumar($a, $b);
    };
};
echo multiadd(2,2,"+");
?>
<br>

<?php
function multiadd ($a, $b, $c){
    if ($c == "+"){
        return sumar($a, $b);};
        else{}
};
echo multiadd(2,2,"+");
?>
<br>


