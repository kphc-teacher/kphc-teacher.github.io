<?php
include "inc/database.php";
include "inc/function.php";
reg_add();
require_once "inc/header.php";


?>

<div class="intro">
    <div class="form">
        <h1>Registration</h1>
        <form action="" method="post">
            <div class="input-form"><input type="text" name="login" placeholder="Login" required></div>
            <div class="input-form"><input type="password" name="pass" placeholder="Password" required></div>
            <div class="input-form"><input type="email" name="email" placeholder="Email" required></div>
            <div class="input-form"><input type="text" name="name" placeholder="Surname" required></div>
            <div class="input-form"><input type="text" name="surname" placeholder="Name" required></div>
            <div class="input-form">
                <input type="submit" name="submit" class="forget" value="Register">
        </form>
    </div>
</div>

<?php include_once "inc/footer.php";