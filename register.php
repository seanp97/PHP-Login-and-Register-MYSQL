<?php

    include "db.php";
    include "header.php";

?>

<div class="container">

    <form style="margin-top: 35vh;" action="registeruser.php" method="POST" role="form">

        <h2>Register</h2>

        <div class="form-group">
            <input type="text" class="form-control" id="" name="reguser" placeholder="Enter username">
        </div>

        <div class="form-group">
            <input type="password" class="form-control" id="" name="regpass" placeholder="Enter password">
        </div>

        <div class="form-group">
            <input type="password" class="form-control" id="" name="regpassconf" placeholder="Confirm password">
        </div>

        <button name="reg_btn" type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>