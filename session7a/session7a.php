<?php

    $arr = [1,2,3];
    print_r($arr);
    echo "<br>";
    var_dump($arr);


    $n=2;
    
    if(isset($n)){
        echo $n;
    }

    $str = "Example of string";
    $bool = TRUE;

    echo "<br>";
    echo gettype($n);
    echo "<br>";
    echo gettype($str);
    echo "<br>";
    echo gettype($bool);


    $negativeValue = -10;

    echo "<br>";
    echo abs($negativeValue);


    $numbers = array(1,2,3,4,5);

    print_r($numbers);

    // example 1
        $arr = [10,2,15,18];
        print_r(array_sum($arr));
    
        echo "<br>";


       // example 2
       $arr1 = [1,3,5];
       $arr2 = [2,4,6];
   
       $mergeArr = array_merge($arr1, $arr2);
       print_r($mergeArr);     
    

    // example 3

    $games = ['cricket', 'football'];
    array_push($games, 'programming');
    print_r($games);
    echo "<br>";



    // example 4
    $number = [1,2,3,4,5,2,2];
    print_r(array_count_values($number));
    echo "<br>";    

    //example 5
    $firstArr = ['hobby1', 'hobby2'];
    $secondArr = ['travelling', 'programming'];
    $combineArr = array_combine($firstArr, $secondArr);
    print_r($combineArr);    


        // example 6
        $info = [
            'name' => 'abc',
            'age' => 20
        ];
    
        print_r(array_change_key_case($info, CASE_UPPER));
    



?>