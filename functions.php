<?php 

    # FUNCTION - Block of code that can be repeated called

    /*
        # DIFFERNT WAYS OF FORMATTING VARIABLES / FUNCTIONS

        -   Camel Case - myFunction()
        -   Lower Case - my_function()
        -   Pascal Case - MyFunction()

    */

    // Create Simple Function
    function simpleFunction() {
        echo 'Hello World';
    }

    // Run Simple Function
    // simpleFunction();


    function sayHello($name = 'World') {
        echo "Hello $name<br>";
    }

    // sayHello('Johan');
    // sayHello('Bob');
    // sayHello();


    // Return Value
    function addNumbers($num1, $num2){
        return $num1 + $num2;
    }

    // $result = addNumbers(5,5);
    // echo $result;


    // Passing Arguments By Reference

    $myNum = 10;

    function addFive($num) {
        $num += 5;
    }

    function addTen(&$num) {
        $num += 10;
    }

    addFive($myNum);
    echo "By Value: $myNum<br>";

    addTen($myNum);

    echo "By Reference: $myNum <br>";

?>