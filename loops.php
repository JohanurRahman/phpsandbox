<?php

    # LOOPS Execute code set number of time
 
    /*
        # TYPES OF LOOPS

        -   for
        -   while
        -   do..while
        -   foreach

    */

    # for Loop
    # params - init, condition, inc

    // for($i = 0; $i < 10; $i++) {
    //     echo 'Number '. ' - '. $i;
    //     echo '<br>';
    // } 

    # while Loop
    # params - condition

    // $i = 0;
    // while($i < 10) {
    //     echo $i;
    //     echo '<br>';
    //     $i++;
    // }

    # do..while Loop
    # params - condition

    // $i = 0;

    // do {
    //     echo $i;
    //     echo '<br>';
    //     $i++;
    // } while($i < 5);



    # foreach Loop
    
    // $people = array('Brad', 'Jose', 'William');
    $people = array('Brad' => 'brad@mail.com', 'Jose' => 'jose@mail.com', 
    'William' => 'william@mail.com');

    foreach($people as $person => $email) {
        echo $person . ' ' . $email;
        echo '<br>';
    }

?>