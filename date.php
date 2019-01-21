<?php

    # DATE
    // echo date('d');     // Day as Numeric
    // echo date('m');     // Month as Numeric
    // echo date('y');     // Year as Numeric     
    // echo date('l');     // Day as String

    // echo date('Y/m/d');
    // echo date('m-d-Y');

    # Timestamps

    // echo date('h');         // Hour
    // echo date('i');         // Minute
    // echo date('s');         // Seconds
    // echo date('a');         // AM or PM
    
    // Set Time Zone
    date_default_timezone_set('Asia/Dhaka');
    
    // echo date('h:i:s a'); 

    /*
        Unix timestamp is a long integer containing the number of 
        seconds between the Unix Epach (January 1 1970 00:00:00 GMT)
        and the time specified.
     */

    $timestamp = mktime(10, 14, 54, 9, 10, 1981);

    // echo $timestamp; 

    // echo date('m/d/Y h:i:s a', $timestamp);

    
    $timestamp2 = strtotime('7:00pm March 22 2016');
    $timestamp3 = strtotime('tomorrow');
    $timestamp4 = strtotime('next Sunday');
    $timestamp5 = strtotime('+ 2 Months');

    // echo $timestamp2;

    // echo date('m/d/y h:i:s a', $timestamp2);
    // echo date('m/d/y h:i:s a', $timestamp3);
    // echo date('m/d/y h:i:s a', $timestamp4);
    // echo date('m/d/y h:i:s a', $timestamp5);



?>