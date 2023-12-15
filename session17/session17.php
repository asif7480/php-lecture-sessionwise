<?php
    // creating a class
    class Car{
        // properties
        public $carName = 'abc';
        public $carModel;

        // constructor function

        function __construct()
        {
            echo "Constructor function called <br>";
        }
        function __destruct()
        {
            echo "destructor function called <br>";
        }

        // mutating method
        function setCarName($name){
            $this->carName = $name;
        }


        // accessor method
        function getCarName(){
            return $this->carName;
        }
        // methods
        function horn(){
            echo "Horn Pressed";
        }
    }

    // creating an object

    $car1 = new Car();

    $car1->setCarName("toyota");

    echo $car1->getCarName();

    echo "<br>";
    
    $car1->horn();
    
    echo "<br>";
    
    // echo $car1->carName;




?>