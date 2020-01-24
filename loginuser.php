<?php

    include "db.php";


    if (isset($_POST['login_btn'])) {
        $loginuser = $_POST['loginuser'];
        $loginpass = $_POST['loginpass'];

        $query = "SELECT * FROM users WHERE username='$loginuser' AND password='$loginpass' LIMIT 1";
        $runquery = mysqli_query($connection, $query);

        if (mysqli_num_rows($runquery) > 0) {
            header("Location: loggedin.php");
        }
        else {
            echo "not logged in";
        }

    }

?>