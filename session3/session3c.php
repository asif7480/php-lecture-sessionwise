<?php
    // array
    // i. Index array/ 1d array/ normal array
    // ii. md array
    /// iii. associative array

    // $numbers = [5,4,3,7,2];

    // print_r($numbers);

    // echo "<br>";
    // var_dump($numbers);


    // md array
    // $mdArr = [1,2,3,['a','b'], true];

    // var_dump($mdArr);
    // print_r($mdArr[4]);

    // associative array
    $info = [
        'id' => 1001,
        'name' => 'abc',
        'email' => 'i@me.com',
        'contacts' => [546546,654654,54657]
    ];


    // echo $info['email'];
    // echo $info['id'];
    // echo $info['name'];
    echo $info['contacts'][2];

    echo "<br>";


    print_r($info);

?>