<?php

    $result1=4;
    $result2=5;
    $operator='+';
    switch($operator){
     case "none":
     echo "select a method!";
     break;
     case "+":
     echo($result1 + $result2);
     break;
     case "Sub":
     echo $result1 - $result2;   
      break;
     case "Mul":
     echo $result1 * $result2;
     break;
     case "Div":
     echo $result1 / $result2;
     break;



    }

?>