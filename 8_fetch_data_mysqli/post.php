<?php 
    require('config/config.php');
    require('config/db.php');

    // Check For Submit
    if (isset($_POST['delete'])) {
     

        $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);
        

        $query = "DELETE FROM posts WHERE id = {$delete_id}";

        if (mysqli_query($conn, $query)) {
            header('Location: ' . ROOT_URL . '');
        } else {
            echo 'ERROR: ' . mysqli_error($conn);
        }

    }



    // get ID
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Create Query
    $query = "SELECT * FROM posts where id = " . $id;

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

        <br>
        <a class="btn btn-primary" href="index.php" class="btn btn-default">Back</a>
        <br>
        <br>


        <h1><?php echo $post['title']; ?></h1>
        <br>

        <small>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
        <br>
        <br>

        <p><?php echo $post['body'] ?></p> 
        <hr>


        <form class="float-right" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?> ">

            <input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
            <input type="submit" name="delete" value="Delete" class="btn btn-danger">

        </form>

        <a  href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id'] ?>" class="btn btn-info">Edit</a>

    </div>


<?php include('include/footer.php'); ?>
