<?php

    $a = 101;
    
    
    if(($a % 2) == 0) {
        echo $a." : çiftir ";
    }
    elseif(($a % 2) == 1)  {
        echo  $a." : tektir ";
    }
    else {
        echo "eror : ".$a;
    }
     
    $b =  0;

    if (!$b){  // $b = 0 False but "!" reverse  \ !$b true  
        echo "<br> if (1) ture 
              <br> 
                   if (0) false";
    }


?>