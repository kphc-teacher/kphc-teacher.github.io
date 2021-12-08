<?php

require_once "inc/database.php";


session_start();
if (isset($_GET['do']) && $_GET['do'] == 'exit') {
    header('Location: index.php');
    unset($_SESSION['login'],$_SESSION['res'],$_SESSION['name']);
}


require_once "inc/function.php";
include "inc/header.php";

if (!isset($_SESSION['login'])) {

    ?>

    <div class="container">
        <div class="section__header">
            <h2 class="section__title">You are not logged in!</h2>
        </div>
    </div>
    <?php
    die();
}
else { ?>

<div class="container">
    <div class="section__header">
        <h3 class="section__suptitle">Hello <? echo $_SESSION['login']; ?></h3>
        <?php

        adm($db);

        ?>



    </div>
</div>

<?php
 }

 ?>
<div id="footer">
    <div>
        &copy; <?php echo date("Y"); ?> KPHC
    </div>
</div>

