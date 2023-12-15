<?php
    function evenOdd($n){
        if($n % 2 ==0){
            echo "<br>Number is " . $n . " and it is even";
        }else{
            echo "<br>Number is " . $n . " and it is Odd";
        }        
        
    }

    evenOdd(25);
    evenOdd(16);
    evenOdd(25);
    evenOdd(13);

    function calculator($n1, $n2, $operation){
        switch ($operation) {
            case '+':
                echo "<br>";
                return $n1 + $n2;
                break;
            case '-':
                echo "<br>";
                    return $n1 - $n2;
                    break;
        
            case 'x':
                echo "<br>";
                    return $n1 * $n2;
                    break;

            case '/':
                echo "<br>";
                return $n1 / $n2;
                break;

            default:
            echo "<br>";
                return "invalid operation";    
            break;
        }
    }


    echo calculator(2,5,"x");


    function userDefineLoop($start, $end){
        for($i = $start; $i<= $end;$i++){
            echo "<br>";
            echo $i;
        }
    }


    userDefineLoop(50,60);

    // $num = 2;
    // for($i=1;$i<=10; $i++){
    //     echo "<br>";
    //     echo $num * $i ;
    // }


    function tableGenerator($start,$end, $num){
        for($i= $start; $i <= $end; $i++){
            echo "<br>";
            echo $num . "*" . $i . "=" . $i*$num;
        }
    }

    tableGenerator(1,15, 10);    


?>