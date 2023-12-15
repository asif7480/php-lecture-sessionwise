<?php
    class ParentClass{
     
        function examplefn(){
            echo "example called from parent class";
        }
    }

    // inherited from class ParentClass
    class ChildClass extends ParentClass{
        function deriveClassExampleFn(){
            echo "derived class function called";
        }
    }


    $objOfParentClass = new ParentClass;
    $objOfDerivedClass = new ChildClass;

    $objOfParentClass->examplefn();
    // $objOfParentClass->deriveClassExampleFn();
    echo "<br>";
    $objOfDerivedClass->deriveClassExampleFn();
    $objOfDerivedClass->examplefn();

?>