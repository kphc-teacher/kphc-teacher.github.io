<?php
include_once "inc/database.php";
include_once "inc/header.php";
include_once "inc/function.php";

if (!empty($_POST['query'])) {
    $search_result = search($_POST['query'], $db);
    echo "<div class='result'>" . $search_result . "</div>";
}
?>

