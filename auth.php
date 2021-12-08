<?php
session_start();
include "inc/database.php";
include "inc/function.php";
//require_once "inc/login.php";
if (isset($_SESSION['login'])) {
    if ($_SESSION['admin'] == '1') {
        header("Location: ../admin/admin.php");
    } else {
        header("Location: profile.php");

        return $_SESSION['$name'] . " " . $_SESSION['surname'];
    }
}
$auth = autho();
require_once "inc/header.php";

?>
<div class="intro">
    <div class="form">
        <h1>Authorization</h1>
        <form action="" method="post">
            <div class="input-form">
                <input type="text" name="login" placeholder="Login">
            </div>
            <div class="input-form">
                <input type="password" name="pass" placeholder="Password">
            </div>
            <div class="input-form">
                <input type="submit" name="submit" class="forget" value="Sign up">
            </div>
        </form>
    </div>
</div>

<?php require_once "inc/footer.php";

