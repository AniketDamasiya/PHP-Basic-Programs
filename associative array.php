<?php
 $fruit_purchase=array();
 $fruit_purchase=["banana"=>2,"apple"=>1,"mango"=>4];
 echo"<br>";
 foreach($fruit_purchase as $x => $y)
 {
     echo "$x : $y <br>";
 }
 print_r($fruit_purchase);
?>