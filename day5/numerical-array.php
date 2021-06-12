<?php
//number array type 1

$a[0] = "welcome";
$a[1] = 10;
$a[2] = 21.22;
$a[3] = "5";   
   //type 2-dynamic array
$a[] = "welcome";
$a[] = 10;
$a[] = 21.22;
$a[] = "5"; 
   //type3-to create array
   $a = array(5,8,18,"php",21.21);
   //print array value
   echo $a[4];
   //printing whole array
   for($i=0;$i<count($a);$i++) {
       echo"<br/>",$a[$i];
   }
    
?>