<?php

    // Check for posted data

    /*
    if(filter_has_var(INPUT_POST, 'data')) {
        echo 'Data Found';
    } else {
        echo 'No Data Found';
    }
    */

    /*
    if(filter_has_var(INPUT_POST, 'data')) {

        $email = $_POST['data'];
        
        // Remove illegal characters

        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $email.'<br>';

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo 'Email is valid';
        } else {
            echo 'Email is not valid';
        }
    } 
    
    */


    # TYPES OF VALIDATION

    # FILTER_VALIDATE_BOOLEAN
    # FILTER_VALIDATE_EMAIL
    # FILTER_VALIDATE_FLOAT
    # FILTER_VALIDATE_INT
    # FILTER_VALIDATE_IP
    # FILTER_VALIDATE_REGEXP
    # FILTER_VALIDATE_URL

    # TYPES OF SANITIZATION

    # FILTER_SANITIZE_EMAIL
    # FILTER_SANITIZE_ENCODED
    # FILTER_SANITIZE_NUMBER_FLOAT
    # FILTER_SANITIZE_NUMBER_INT
    # FILTER_SANITIZE_SPECIAL_CHARS
    # FILTER_SANITIZE_STRING
    # FILTER_SANITIZE_URL



    // INTEGER VALIDATION

    /*$var = '23';

    if(filter_var($var, FILTER_VALIDATE_INT)) {
        echo $var. ' is a number';
    } else {
        echo $var. ' is not a number';
    }*/


    // SANITIZING AN INTEGER

    /*
    $var = '<script>alert(1)</script>';
    echo $var; 
    echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);

    // var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));

    */

    /*
    $filters = array(
        "data" => FILTER_VALIDATE_EMAIL,
        "data2" => array(
            "filter" => FILTER_VALIDATE_INT,
            "options" => array(
                "min_range" => 1,
                "max_range" => 100
            )
        )
    );


    print_r(filter_input_array(INPUT_POST, $filters));

    */

    $arr = array(
        "name" => 'johanur rahman',
        "age" => "25",
        "email" => "johan@gmail.com"
    );

    $filters = array(
        "name" => array(
            "filter" => FILTER_CALLBACK,
            "options" => "ucwords"
        ),
        "age" => array(
            "filter" => FILTER_VALIDATE_INT,
            "options" => array(
                "min_range" => 1,
                "max_range" => 120
            )
        ),

        "email" => FILTER_VALIDATE_EMAIL

    );

    print_r(filter_var_array($arr, $filters));


?>



<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="submit">Submit</button>
</form>