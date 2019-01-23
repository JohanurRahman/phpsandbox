<?php 

    require('config/config.php');
    require('config/db.php');

    // get ID
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Create Query
    $query = "SELECT * FROM posts where id = ".$id;

    // Get Result
    $result = mysqli_query($conn, $query);

    // Fetch Data
    $post = mysqli_fetch_assoc($result);
    // var_dump($posts);

    // Free Result
    mysqli_free_result($result);

    // Close Connection
    mysqli_close($conn);
    

?>


<?php include('include/header.php'); ?>


<body>

    <div class="container">

        <a href="index.php" class="btn btn-default">Back</a>

        <h1><?php echo $post['title']; ?></h1>
        <br>

        <small>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>

        <p><?php echo $post['body'] ?></p> 

    </div>


<?php include('include/footer.php'); ?>
