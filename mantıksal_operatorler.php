<?php

    /*
        Mantıksal 0peratörler
            && - AND - VE
            || - OR - VEYA
            ! - Değilse 
    */

    $a = 5;
    $b = 5;
    
    echo (($a == $b) && ($a+ $b==10))."<br>";//ture
    echo (($a == $b) || ($a+ $b==9))."<br>";//ture
    echo !($a != $b);//  ! reverse   //ture
     
    



?>