<?php

    # CONDITIONALS

    /* 
        ==      Equal (Matches only value)
        ===     Identical (Matches data type along with value)
        <       Greateter than
        >       Less than
        <=      Less than equal
        >=      Greater than equal
        !=      Not Equal
        !==     Not Identical

    */

    # BASIC IF-ELSE

    // $num = 7;
    
    // if ($num < 6) {
    //     echo 'true';
    // }
    // else if ($num > 6) {
    //     echo 'Greater than 6';
    // }
    // else {
    //     echo 'false';
    // }


    # NESTED IF-ELSE

    // $num = 11;
    
    // if($num > 5) {
    //     if($num < 10) {
    //         echo 'true';
    //     }
    //     else{
    //         echo 'Greater than 10';
    //     }
    // }
    // else{
    //     echo 'false';
    // }



    # LOGICAL OPERATORS 

    /*
        -   && (AND)
        -   || (OR)
        -   XOR [ One has to be true but not both ]
     
    */

    // $num = 5;

    // if ($num > 4 && $num < 10) {
    //     echo "$num passed";
    // }

    // if ($num > 4 || $num < 10) {
    //     echo "$num passed";
    // }

    // if ($num > 4 XOR $num < 10) {
    //     echo "$num passed";
    // }




    # SWITCH

    $favColor = 'red';

    switch($favColor) {
        case 'red':
            echo 'You favorite color is red';
            break;
        case 'blue':
            echo 'You favorite color is blue';
            break;
        case 'green':
            echo 'You favorite color is green';
            break;
        default:
            echo 'You favorite color is something else';
            break;
    }

?>