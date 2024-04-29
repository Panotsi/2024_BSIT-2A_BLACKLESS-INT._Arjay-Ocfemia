<?php

        $db_server = "localhost";
        $db_user = "root";
        $db_pass = "";
        $db_name = "blackless(2)";
        $db_conn = "";

        $conn = mysqli_connect($db_server,
                                $db_user,
                                $db_pass,
                                $db_name);

                   
        $username = $_POST ["Uname"];
        $password = $_POST ["password"];

        $sql = "SELECT * FROM users WHERE user_name = '$username' AND password = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
                echo "Login successful!";
            } else {
                header("Location: login.php");
            }
        $conn->close();

?>
