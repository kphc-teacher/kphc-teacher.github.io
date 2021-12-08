<?php
require_once "inc/database.php";
require_once "inc/function.php";
require_once "inc/header.php";

$id_topic = $_REQUEST['id_topic'];

?>

<div class="about" id="about">
    <div class="container">
        <div class="search">
            <form name="search" method="post" action="search.php">
                <input type="search" name="query" placeholder="Поиск">
                <button type="submit">Найти</button>
            </form>
        </div>
        <div class="posts">
            <?php generation_posts_topic($db, $id_topic); ?>
        </div>
    </div>

</div>

<?php require_once "inc/footer.php";
