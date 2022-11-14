<?php

    $ad = "Ayberk";
    $soyad = "Catal";
    $meslek = "Geliştirici";
    $yas = 19;

    /*
        Dizi Tanımlama
            1- array()
            2- []
    */

    $kimlik = array(
        'ad' => "Ayberk",
        'soyad' => "Catal",
        'meslek' => "Geliştirici",
        'yas' => 19
    );

    $kimlik2 = [
        'ad' => 'ayberk',
        'soyad' => 'catal',
        'meslek' => 'geliştirici',
        'yas' => 19
    ];

    $sayilar = array(1,2,3);
    $sayilar2 = [1,2,3];

    /*
        Dizi İçindeki Elemanlara Erişmek
            - print_r()
    */

    echo $kimlik['meslek'];
    print_r($kimlik2);

?>