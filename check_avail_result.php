<html>
    <head>
        <title>Student Input Results</title>
    </head>

    <body>
        <?php
            $db = mysqli_connect("localhost", "group36", "password", "group36");
            if (mysqli_connect_errno()) {
                echo "failed to connect to mysql: ".mysqli_connect_error();
            }

            $query = "INSERT INTO book_owned(user_id, book_id) VALUES ('$_POST[user]', '$_POST[movie]')";            
            echo "1 relationship created successfully"
        ?>
    </body>
</html>
