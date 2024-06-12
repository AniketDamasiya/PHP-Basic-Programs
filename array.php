<?php
 $roll_no=array(10);
 echo"array roll no are.... <br>";
 for($i=0;$i<10;$i++){
    $roll_no[$i]=rand(1,10);
    echo "roll_no[$i]=",$roll_no[$i],"<br>";
 }
?>