<?php
 $fruit_purchase=array();
 $fruit_purchase=["banana"=>2,"apple"=>1,"mango"=>4];
 echo"<br>";
 
 print_r($fruit_purchase);
 echo"<br>asending order <br>";
 sort($fruit_purchase);
 print_r($fruit_purchase);
 echo"<br>desending order <br>";
 rsort($fruit_purchase);
 print_r($fruit_purchase);
 echo"<br> sort associative arrays in ascending order, according to the key <br>";
 ksort($fruit_purchase);
 print_r($fruit_purchase);
 echo"<br> sort associative arrays in ascending order, according to the value <br>";
 asort($fruit_purchase);
 print_r($fruit_purchase);
 echo"<br> sort associative arrays in decending order, according to the key <br>";
 krsort($fruit_purchase);
 print_r($fruit_purchase);
 echo"<br>sort associative arrays in decending order, according to the value <br>";
 arsort($fruit_purchase);
 print_r($fruit_purchase);
 

?>