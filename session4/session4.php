<?php
    echo "this is session 4";

    // conditional control structures
    // i. if
    // ii. else
    // iii. if elseif else
    // iv. switch case
    echo "<br>";
    // $age = 20;

    // if($age >= 18){
    //     echo "Age is: $age. Driving liscense can be issued";
    // }else{
    //     echo "Age is: $age. Liscense cannot be issued.";
    // }

    // $num = 39;

    // if($num % 2 == 0){
    //     echo "Number is $num and it is Even.";
    // }else{
    //     echo "Number is $num and it is Odd.";
    // }



    // $percentage = 35;
    // if($percentage >= 80){
    //     echo "A One grade.";
    // }elseif($percentage >= 70){
    //         echo "A grade";
    // }elseif($percentage >= 60){
    //         echo "B grade";
    // }elseif($percentage >= 50){
    //     echo "C grade";
    // }else{
    //     echo "fail";
    // }

    // $grade = 'A';

    // switch($grade){
    //     case 'A':
    //         echo "Percentage between 70 to 80";
    //         break;
    //     case 'B':
    //          echo "Percentage between 69 to 70";
    //          break;
    //     case 'C':
    //         echo "Percentage between 59 to 50";
    //         break;
    //     default:
    //         echo "Percentage between 49 to 0";
    //         break;
    // }

    //break and continue;

    // for($i=1; $i<=10; $i++){
    //     if($i==7){
    //         break;
    //     }
    //     echo "<br>" . $i;
    // }


    for($i=1; $i<=10; $i++){
        if($i==7){
            continue;
        }
        echo "<br>" . $i;
    }
?>