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

            $count_query = "SELECT * FROM books";
            $count_result = mysqli_query($db, $count_query);
            $count = mysqli_num_rows($count_result) + 1;
            $query = "INSERT INTO students(sid, f_name, l_name, email, username, password) VALUES 
            ('$count', '$_POST[f_name]', '$_POST[l_name]', '$_POST[email]', '$_POST[username]', '$_POST[password]')";
            if (!mysqli_query($db, $query)) {
                die('Error: '.mysqli_error($db));
            }
            echo "1 record added successfully"
        ?>
    </body>
</html>
