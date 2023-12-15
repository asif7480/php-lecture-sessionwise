<?php
    // loops
    // for
    // while
    // do while
    // foreach --> mostly used with arrays


    // for($i=0; $i<=15; $i=$i+2){
    //     echo $i . "<br>";
    // }


    // for($i=15; $i>=1; $i--){
    //     echo $i . "<br>";
    // }


    // while


    // $a = 1;

    // while($a<=5){
    //     echo "$a"."<br>";
    //     $a++;
    // }


    // $b = 7;

    // do{
    //     echo $b . "<br>";
    //     $b++;
    // }while($b<15);


    //foreach

    // $info = [
    //     'id' => 1001,
    //     'name' => 'abc',
    //     'email' => 'i@me.com',
    // ];

    // foreach($info as $i => $value){
    //     echo "Index: $i. Value is $value"."<br>";
    // }
    


    $number = [10,20,30,40];
    
    foreach($number as $i => $value){
        echo "$i: $value". "<br>";
    }
?>