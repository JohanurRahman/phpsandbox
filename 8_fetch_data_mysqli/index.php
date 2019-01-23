<?php 

    require('config/config.php');
    require('config/db.php');

    // Create Query
    $query = 'SELECT * FROM posts ORDER BY created_at DESC';

    // Get Result
    $result = mysqli_query($conn, $query);

    // Fetch Data
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // var_dump($posts);

    // Free Result
    mysqli_free_result($result);

    // Close Connection
    mysqli_close($conn);
    

?>


<?php include('include/header.php'); ?>

<br>

    <div class="container">
    
        <h1>Posts</h1>
        <br>

        <?php foreach($posts as $post): ?>

            <div class="jumbotron" style="padding: 2em">
                <h3><?php echo $post['title']; ?></h3>

                <small>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
                <br>
                <br>

                <p><?php echo $post['body'] ?></p> 
                <!-- <button type="button" class="btn btn-link">Link</button> -->
                <a type="button" class="btn btn-primary" href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $post['id'];?>">Read More</a>
                
            </div>
            <br>

        <?php endforeach; ?>

    </div>

<?php include('include/footer.php'); ?>

