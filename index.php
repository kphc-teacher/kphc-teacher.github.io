<?php
require_once "inc/database.php";
require_once "inc/function.php";
include "inc/header.php";
?>

    <div id="slider">
        <div id="box">
            <img src="a.jpg">
        </div>

        <button class="prew fa fa-chevron-left" onclick="prewImage()"></button>
        <button class="next fa fa-chevron-right" onclick="nextImage()"></button>
    </div>

    <section class="section" id="bot">
        <div class="container">
            <div class="section__header">
                <h2 class="section__title">Краткая навигация</h2>
                <div class="section__text">
                    <p>Данный предназначен для стдуентов КПВК,на нем вы можете найти материалы для учебы,новости и
                        задать вопрос учителю в общий чат.Но прежде, чем начать использовать сайт, следует пройти
                        процесс регистрации.Далее вы сможете использовать чат.Во вкладке материалы вы можете найти такие
                        позиции как:Новости,HP-17,ВТР-2,ТР-21. В них вы можете найти материалы урока,новости,касаемые
                        учебного процесса.Также, вы можете прокомментировать каждую статью раздела,для получения
                        обратной связи</p>
                </div>
            </div>
        </div>

    </section>

<?php require_once "inc/footer.php";
