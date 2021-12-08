<?php
include_once "inc/database.php";
include_once "inc/function.php";
include_once "inc/header.php";
$id_article = $_REQUEST["id_article"];

function send_comment ($db, $comment, $id_article) {
    $sql = "INSERT INTO comment (comment, id_article) VALUES ('$comment', '$id_article')";
    $rez = mysqli_query($db, $sql);


echo '<script>location.replace("http://project/post.php?id_article=' . $id_article . '");</script>'; exit;
}

if (isset($_REQUEST['doGo']) === true) {
    send_comment($db, $_REQUEST['comment'], $id_article);
}

?>


<div class="container">
    <div class="post_item">
        <?php
        generation_post($db, $id_article);
        ?>
    </div>

</div>
<div class="comments container">
    <form action="<?= $_SERVER["SCRIPT_NAME"] ?>">
        <textarea name="comment" id="" style="width:800px; height:50px;"></textarea>
        <input type="hidden" name="id_article" value="<?php echo $id_article ?>">
        <input name="doGo" type="submit" value="Отправить">
    </form>
    <p>Комментарии:</p>

    <?php
    generation_comment($db, $id_article);
    ?>
</div>
<?php include_once "inc/footer.php";