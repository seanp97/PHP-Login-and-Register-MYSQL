<?php
    include "db.php";
    include "header.php";
?>

<div class="container">

    <form style="margin-top: 35vh;" action="loginuser.php" method="POST" role="form">

        <h2>Login</h2>

        <div class="form-group">
            <input type="text" class="form-control" name="loginuser" id="" placeholder="Input field">
        </div>

        <div class="form-group">
            <input type="password" class="form-control" name="loginpass" id="" placeholder="Input field">
        </div>

        <button name="login_btn" type="submit" class="btn btn-primary">Submit</button><br><br>

        <a href="http://localhost:8080/login/register.php">Register</a>
    </form>

</div>
