<?php
    
    if(isset($_GET['name'])){
        // echo $_GET['name'];
        // echo $_GET['email'];

        // print_r($_GET);
        $name = htmlentities($_GET['name']);
        // echo $name;

    }   

    /*
    if(isset($_POST['name'])){
        // print_r($_POST);
        $name = htmlentities($_POST['name']);
        // echo $name;
    }
    

    if(isset($_REQUEST['name'])){

        // print_r($_REQUEST);
        $name = htmlentities($_POST['name']);
        echo $name;

    }
    

    echo $_SERVER['QUERY_STRING'];
    */
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>

</head>
<body>

    <form method="GET" action="get_post.php">
        <div>
            <label>Name</label>
            <input type="text" name="name">
        </div>

        <div>
            <label>Email</label>
            <input type="text" name="email">
        </div>
        <input type="submit" value="submit">
    </form>

    <ul>
        <li>
            <a href="get_post.php?name=Brad">Brad</a>
        </li>

        <li>
            <a href="get_post.php?name=Steve">Steve</a>
        </li>
    </ul>

    <h1><?php echo "{$name}'s Profile" ?></h1>
    
</body>
</html>