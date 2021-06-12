<?php

$a=array("c","php","c","anroid","php","java");
$b=array_count_values($a);
foreach ($a as $key => $value) {
    echo "<br> $key - <b> $value</b>";
}

$rev= array_reverse($a);
echo "<pre>";
print_r($rev);
echo "<pre>";

$temp = in_array('php', $a);
echo "<br>".$temp;

$index = array_rand($a);
echo "<br>".$a[$index];
      
echo "<pre>";
print_r(array_unique($a));
echo "<pre>";

$check = array_search('android', $a);
echo $check;
?>
<?php
$myarray=array(1,2,3,4,5);
echo "<br>".array_sum($myarray);
echo "<br>". array_product($myarray);
shuffle($myarray);
foreach ($myarray as $key => $value) {
    echo "<br /> $value";
}
?>
<?php
$my=array(9,4,8,7,5);
sort($my);
echo "<pre>";
print_r($my);
echo "<pre>";
rsort($my);
echo "<pre>";
print_r($my);
echo "<pre>";
asort($my);
echo "<pre>";
print_r($my);
echo "<pre>";

echo end($my);

?>
<?php
$a=array("c","php","c","anroid","php","java");
$b=array(1,2,3,4,5);

$new = array_merge($a,$b);
echo "<pre>";
print_r($new);
echo "<pre>";
?>
<?php 
$year = range(1900,2020);
echo "<select>";
foreach ($year as $value) {
    echo "<option> $value</option>";
}
echo "</slect>";
?>
<?php
$arr = array("a" => "apple", "b" => "banana");
echo array_key_exists ('a',$arr);
?>
<?php
$arr = array(
"Banana" => "Yellow",
"Apple" => "Red",
"Mango" => "Green");
$uppercase = array_change_key_case ($arr,CASE_UPPER);
print_r($uppercase);
 $indexofarray= array_rand($a,2);
foreach ($a as $key => $value) {
    echo "<br>$key -<strong>".$a[$value]."</strong>";
}
?>
<?php
$arr1 = array("Banana" , "Apple" , "Mango");
$arr2 = array("Yellow","Red ","green");
$NewVar = array_combine ($arr1, $arr2);
print_r($NewVar);
?>