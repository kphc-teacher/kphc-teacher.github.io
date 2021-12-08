<?php
$sql = "SELECT * FROM comment WHERE id_article = " . $id_article;
$resSQL = mysqli_query($db, $sql);
if ($resSQL->num_rows > 0) {
    while ($resComment = $resSQL->fetch_assoc()) {

        ?>
        <div class="comment">
            <p><b><?= $resComment['comment'] ?></b></p>
            <p>Оставлен: <?= substr($resComment['date'], 0, 11) ?></p>
        </div>
        <?php
    }
} else {
    ?>
    <p>Комментариев нет</p>
    <?php
}