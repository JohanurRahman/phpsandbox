<?php 

    $path = '/dir0/dir1/myfile.php';
    $file = 'file1.txt';

    # Return filename
    // echo basename($path);

    # Return filename without file extension
    // echo basename($path, '.php');

    # Return the directory name from path
    // echo dirname($path);

    # Check if file exists [Can be used for folders also]
    // echo file_exists($file);

    # Get absolute(real) path
    // echo realpath($file);

    # Checks to see if file [Can only check if the file exist not folder]
    // echo is_file($file);

    # Check if a file is writable
    // echo is_writable($file);

    # Check if a file is readable
    // echo is_readable($file);

    # Get the file size
    // echo filesize($file);

    # Create a dirctory
    // mkdir('testing');

    # Will eemove a directory if it is empty
    // rmdir('testing');

    # Copy file
    // echo copy('file1.txt', 'file2.txt');
    
    # Rename a file
    // rename('file3.txt', 'myfile.txt');

    # Remove a file
    // unlink('myfile.txt');

    # Write from file to string
    // echo file_get_contents($file);

    # Write a string to a file
    // echo file_put_contents($file, 'Goodbye');


    # Append content in a file 
    /*
    $current = file_get_contents($file);
    $current .= ' Yo sup?';
    file_put_contents($file, $current);
    */

    # Open a file for reading
    /*
    $handle = fopen($file, 'r');
    $data = fread($handle, filesize($file));
    echo $data;
    fclose($handle);
    */

    # Open a file for writing
    /*
    $handle = fopen('file2.txt', 'w');
    $txt = "John Doe\n";
    fwrite($handle, $txt);
    $txt = "Steve Smith\n";
    fwrite($handle, $txt);
    fclose($handle);
    */
    

?>