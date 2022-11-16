<html>
    <head>
        <title>SMt?</title>
    </head>

    <body>
        <?php
            $db = mysqli_connect("localhost", "group36", "password", "group36");
            if (mysqli_connect_errno()) {
                echo "failed to connect to mysql: ".mysqli_connect_error;
            }
            $query = "SELECT * FROM books";
            $result = mysqli_query($db, $query);
        ?>
        <form action="check_avail_result.php" method="post">
            <select name="user">    
                <?php
                    $result = mysqli_query($db, "SELECT * FROM User");
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
                    }
                ?>
            </select>
            <p>
                # inside the pop up this parent
                // create a line for every entry in the user table
                <?php
                    $result = mysqli_query($db, "SELECT * FROM user");
                    while ($row = mysqli_queri($db, "SELECT * FROM user")) {
                        echo "ID: " . $row['id']  . " Name: " . $row['name'] . "<br>";
                    }
                ?>
            </p>
            <select name="book">    
                <?php
                    $result = mysqli_query($db, "SELECT * FROM book");
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
                    }
                ?>
            </select> 
            <input type="submit" value="Sumbit" />
    </body>
</html>