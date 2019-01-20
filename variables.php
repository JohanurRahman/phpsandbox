<h1>yo sup nigga</h1>

<?php

    // Single Line Comment
    # Single Line Comment
    /*
        Multiline 
        Comment
    */

    # VARIABLES 

    /*
        -   Must have prefix $
        -   Start with a letter or an underscore
        -   Can't start variable name with a number
        -   Can only contain alpha-numeric characters 
            and underscores (A-z, 0-9, and _ )
        -   Case sensitive

    */

    # DATA TYPES

    /*
        -   Strings (Have to wrapped in quotes)
        -   Integers
        -   Floats
        -   Booleans
        -   Arrays
        -   Objects
        -   NULL
        -   Resource (Reference to a function)

    */


    $output = 'Hello World';
    $num1_integer = 4;
    $num2_integer = 10;
    $sum = $num1_integer + $num2_integer;
    $num_float = 4.4;
    $bool = true;

    $str1 = 'Hello';
    $str2 = 'World';
    $greeting = $str1 . ' ' . $str2 . '!';
    $greeting2 = "$str1 $str2";

    // Escape Sequence

    $str3 = 'They\'re here';
    $str4 = "They're here";

    // Constants

    /* define (const_name, const_value, 
    boolean: case_sensitive/insensitive) */

    define('retail', 'here', true );


    // echo $output;
    // echo $sum;
    // echo $greeting;
    // echo $greeting2;
    // echo $str3;
    // echo $str4;
    echo Retail;

?>