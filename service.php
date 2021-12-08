<?php
require_once "inc/database.php";
require_once "inc/function.php";
require_once "inc/header.php";
?>

    <section class="section">
        <div class="container">
            <div class="section__header">
                <h2 class="section__title">Расписание</h2>
                <div class="section__text">
                    <p>Здесь вы можете найти расписание за первый семестр, данные могут меняться и обновляться</p>
                </div>
            </div>

            <div class="wedo">
                <div class="wedo__item">

                    <div class="accordion">
                        <div class="accordion__item " data-collapse="#wedo_1">
                            <div class="accordion__header">
                                <div class="accordion__title">TP-21</div>
                            </div>
                            <div class="accordion__content" id="wedo_1">
                                <p>
                                    <img class="accordion__icon" src="assets/images/services/Снимок.JPG" width="500"
                                         height="600">
                                </p>
                            </div>
                        </div>

                        <div class="accordion__item " data-collapse="#wedo_2">
                            <div class="accordion__header">
                                <div class="accordion__title">HP-17</div>
                            </div>
                            <div class="accordion__content" id="wedo_2">
                                <p>
                                    <img class="accordion__icon" src="assets/images/services/Снимок1.JPG" width="500"
                                        height="600">
                                </p>
                            </div>
                        </div>

                        <div class="accordion__item" data-collapse="#wedo_3">
                            <div class="accordion__header">
                                <div class="accordion__title">BTP-12</div>
                            </div>
                            <div class="accordion__content" id="wedo_3">
                                <p>
                                    <img class="accordion__icon" src="assets/images/services/Снимок2.JPG" width="500"
                                        height="600">
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>


<?php require_once "inc/footer.php";

