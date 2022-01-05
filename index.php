<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form action="add.php" method="post">
            <input type="text" name="name" placeholder="Name">
            <br>
            <input type="text" name="comment" placeholder="Comment">
            <br>
            <button type="submit" name="submit">Add</button>
        </form>

        <?php
            require('display.php');
        ?>
    </body>
</html>