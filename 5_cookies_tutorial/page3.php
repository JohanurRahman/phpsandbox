<?php

    $user = ['name' => 'Brad', 'email' => 'test@test.com',
             'age' => 35];


    // Will prepare the array to be stored in the cookies
    $user = serialize($user);

    setcookie('user', $user, time() + (86400 * 30)); 
    
    $user = unserialize($_COOKIE['user']);

    // echo $user['name'];
    print_r($user);

?>