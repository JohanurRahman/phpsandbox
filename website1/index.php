<!-- 
    # INCLUDE AND REQUIRE

    include will emit a warning (E_WARNING) and the script will continue, whereas require will emit a fatal error (E_COMPILE_ERROR) and halt the script

    include_once and require_once behave like include and require respectively, except they will only include the file if it has not already been included. Otherwise, they throw the same sort of errors.

 -->

<?php require_once ('include/header.php') ?>

    

    <h1>Home</h1>

<?php require ('include/footer.php') ?>


