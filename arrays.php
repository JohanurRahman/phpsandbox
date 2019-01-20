<?php

    # ARRAY - Variable that holds multiple values
    /*
        # 3 types of arrays

        -   Indexed
        -   Associative
        -   Mutli-dimensional

    */ 


    # INDEXED ARRAY

    $people = array('Kevin', 'Jeremy', 'Sara');
    $ids = array(23, 55, 12);
    $cars = ['Honda', 'Toyota', 'Ford'];

    // Adding to an array
    $cars[3] = 'Chevy';
    $cars[] = 'BMW';

    // echo $people[2];
    // echo $ids[2];
    // echo $cars[4];

    // echo count($cars);

    # echo for arrays
    // print_r($cars);

    # echo array element with data type
    // echo var_dump($cars);



    # ASSOCIATIVE ARRAY - Allows you to define the Key and Value of an array

    $people = array('Brad' => 35, 'Jose' => 32, 'William' => 37);

    $ids =[22 => 'Brad', 44 => 'Jose', 63 => 'William'];

    // Adding to an array

    $people['Jill'] = 42;

    // echo $people['Brad'];
    // echo $people['Jill'];
    // echo $ids[22];
    // print_r($people);
    // var_dump($people);




     # MULTIDIMENSIONAL ARRAY

     $cars = array (
        ['Honda', 20, 10],
        ['Toyota', 30, 20],
        ['Ford', 23, 12],

        // array('Honda', 20, 10),
        // array('Toyota', 30, 20),
        // array('Ford', 23, 12)
     );

     echo $cars[1][2];


?>