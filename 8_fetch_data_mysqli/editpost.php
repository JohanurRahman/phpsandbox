<?php 

    require('config/config.php');
    require('config/db.php');

    // Check For Submit
    if(isset($_POST['submit'])) {

        $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);

        // Get form data
        $title = mysqli_real_escape_string($conn,$_POST['title']);
        $author = mysqli_real_escape_string($conn,$_POST['author']);
        $body = mysqli_real_escape_string($conn,$_POST['body']);

        $query = "UPDATE posts SET
                    title = '$title',
                    author = '$author',
                    body = '$body'
                  WHERE id = {$update_id}";
        
        if(mysqli_query($conn, $query)) {
            header('Location: '.ROOT_URL.'');
        } else {
            echo 'ERROR: '.mysqli_error($conn);
        }
    
    }

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

<br>

    <div class="container">
    
        <h1>Add Post</h1>
        <br>

        <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">

            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" value="<?php echo $post['title']; ?>" class="form-control">
            </div>

            <div class="form-group">
                <label>Author</label>
                <input type="text" name="author" value="<?php echo $post['author']; ?>" class="form-control">
            </div>

            <div class="form-group">
                <label>Body</label>
                <textarea name="body"  class="form-control"><?php echo $post['body']; ?></textarea>
            </div>
            <br>
            <input type="hidden" name="update_id" value="<?php echo $post['id']; ?>">
            <input type="submit" name="submit" value="Submtit" class="btn btn-primary">

        </form>

    </div>

<?php include('include/footer.php'); ?>

