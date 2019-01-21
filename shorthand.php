<?php

    $loggedIn = false;
    $arr = [1,2,3,4,5];

    /*
    if($loggedIn) {
        echo 'You are logged in';
    } else {
        echo 'You are not logged in';
    }
    */

    // echo ($loggedIn) ? 'You are logged in': 'You are not logged in';

    //$isRegistered = ($loggedIn == true) ? true : false;
    // echo $isRegistered;

    // $age = 7;
    // $score = 12;

    # NESTED TERNARY OPERATOR

    // echo 'Your score is: '.($score > 10 ? ($age > 10 ? 'Average': 'Exceptional'): ($age > 10 ? 'Horrible' : 'Average'));


?>

<div>

    <?php if($loggedIn) { ?>

        <h1>Welcome User</h1>

    <?php } else { ?>

        <h1>You are not logged in</h1>

    <?php } ?>

</div>

<div>

    <?php if($loggedIn) : ?>
        <h1>Welcome User</h1>
    <?php else: ?>
        <h1>Welcom Guest</h1>
    <?php endif; ?>

</div>


<div>

    <?php foreach($arr as $val): ?>
        <?php echo $val; ?>
    <?php endforeach; ?>

</div>


<div>

    <?php for($i = 0; $i < 10; $i++): ?>
       <li> <?php echo $i; ?> </li>
    <?php endfor; ?>

</div>