<?php

    $a = 4;
     /*
    switch($a){
        case 5;
        echo "1";
        break;
        case 4;
        echo  "2";
        break;
        default;
        echo "3 ";
        break;
    }
    */
    switch($a):
        case 5;
        echo "1";
        break;
        case 4;
        echo  "2";
        break;
        default;
        echo "3 ";
        break;
    endswitch;
    echo"<br>";
    /*
    if($a == 4) {
        echo "1";
    }
    elseif($a == 5)  {
        echo  "2";
    }
    else {
        echo "3 ";
    }*/
     
    if ($a == 4):
        echo "1";

    elseif($a == 5):
        echo  "2";

    else:
        echo"3";

    endif;
?>
<?php 
if($a==4): // {
?>
    <h1>a 4e eşitir</h1>
<?php 
endif;// }
?>