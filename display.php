<?php
    include_once 'dbh.php';
    
    $sql = "SELECT * FROM users ORDER BY name;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo $row['name'] . "<br>";
            echo $row['comment'] . "<br>";
        }
    }