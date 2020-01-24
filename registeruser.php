<?php

    include "db.php";

    if (isset($_POST['reg_btn'])) {
        $reguser = $_POST['reguser'];
        $regpass = $_POST['regpass'];
        $regpassconf = $_POST['regpassconf'];


        if ($regpass == $regpassconf) {
            $query = "INSERT INTO users (username, password) VALUES ('$reguser', '$regpass')";
            $runquery = mysqli_query($connection, $query);

            if ($runquery) {
                header("Location: index.php");
            }
        }
    }

?>

