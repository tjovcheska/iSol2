<?php
if (isset($_POST['submit'])) {

    require 'dbh.php';

    $name = $_POST['name'];
    $comment = $_POST['comment'];

    if (empty($name) || empty($comment)) {
        header("Location: index.php?add=error");
        exit();
    } else if ((strlen($name) > 15) && !preg_match("/^[a-zA-Z]*//", $name)) {
        header("Location: index.php?add=error");
        exit();
    } else if (strlen($comment) > 200) {
        header("Location: index.php?add=error");
        exit();
    }
    else {
        $sql = "INSERT INTO users (name, comment) VALUES ('$name', '$comment');";
        mysqli_query($conn, $sql);
    
        header("Location: index.php?add=success");
    }


} else {
    header("Location: index.php?add=error");
}