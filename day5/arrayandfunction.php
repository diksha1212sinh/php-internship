<?php
/* echo "<h3>indexed array </h3>";
$color =array("pink","Black","White","Green");
foreach($color as $val)
echo $val."<br/>"; */


/* 1)count() function example
 $arr = array ('php','c','c++','java');     //output 4
 echo count($arr);
-------------------------------------------------------*/
 /* 2) array_sum() function
 $a = array(1,2,3,4,6,7,8,9);        //output 40
 echo array_sum($a);
 ------------------------------------------------------------*/
 /*3) array_product() 
 $b= array(4,5,6,7,8,9);
 echo array_product($b);                 //output 60480
 ---------------------------------------------------*/
 /* 4) array_reverse()
  
  $c =array('c','c++','java','php');
  $rev = array_reverse($c);                       //output ->Array ( [0] => php [1] => java [2] => c++ [3] => c )
  print_r($rev);
  ------------------------------------------------------------*/
 /*5) in_array()
  $f= array('c','c++','java','php','android');
  $temp= in_array('php',$f);
  echo $temp;                                                //output 1
  ------------------------------------------------------*/
  
 /*6)array_rand()
 $arr=array('c','c++','java','php','android');                  //php
 $indexofarray=array_rand($arr);
  echo $arr[$indexofarray];
  -------------------------------------------------*/
  /*7) array_unique()
  
   $arr=array('c','c++','java','php','android');             //output: Array ( [0] => c [1] => c++ [2] => java [3] => php [4] => android )
   print_r(array_unique($arr));
  -------------------------------------------------*/
  /*8) array_merge()
   
   $arr1=array('c','c++','java','php','android'); 
   $arr2=array(10,20,30,40,50,60);
    $newarr= array_merge( $arr1, $arr2);                       //output: Array ( [0] => c [1] => c++ [2] => java [3] => php [4] => android [5] => 10 [6] => 20 [7] => 30 [8] => 40 [9] => 50 [10] => 60 )
    print_r( $newarr); 
  =====================================================================*/
  /*9) array_search ()
  $arr=array('c','c++','java','php','android');
  $check= array_search('android',$arr);                 //output: 4
  echo $check;
  -----------------------------------*/
  /*10) range()
 $arr=range("11","20");
 foreach($arr as $key => $value)
 {                                                                      
	 echo "<br/> $key-$value";
 } 
 
 output
0-11
1-12
2-13
3-14
4-15
5-16
6-17
7-18
8-19
9-20 */	 

/*11) sort()
 $arr=array(56,20,45,4,58,60);
sort($arr);
print_r($arr);  */                     //Array ( [0] => 4 [1] => 20 [2] => 45 [3] => 56 [4] => 58 [5] => 60 )
 
 
 


?>