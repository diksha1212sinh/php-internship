<?php

$year= 2018;

if($year%4==0 and $year%100!=0 or $year%400==0)
{
	echo '2018 is leapyear';
}
else{
	echo'2018 is not leapyear';
}






?>