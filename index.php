<?php
$title = 'Косметологические процедуры для лица и тела на сертифицированных препаратах на Кантемировской и Юго-западной по привлекательным ценам'; 
$description = 'Индивидуальный подход к каждому клиенту. Бесплатная консультация. Большой опыт работы';
$keywords = 'косметолог консультация косметика косметология чистка пилинг мезо лазер';

require ($_SERVER['DOCUMENT_ROOT'].'/header.php');?>

<main class="container-fluid">
    <div class="row align-items-center text-center my-3 p-5 preview">
        <div class="col-lg-7 col-sm-12">
            <img src="<? $_SERVER['DOCUMENT_ROOT']?>/images/main/main_photo.jpg" class="main__photo" alt="main_photo"
                width="85%">
        </div>

        <div class="col-lg-5 col-sm-12 my-3">
            <h1>Косметолог<br>Эльза Эдуардовна</h1>
            <br><br>
            <p>Опыт работы 10 лет<br>Инъекционные процедуры, пилинги, чистки, лазер</p>
        </div>
    </div>

    <div class="row align-items-start text-center m-5">
        <h2 class="my-3">Процедуры</h2>
        <p class="my-3">Индивидуальный подход к каждому клиенту. Я использую только качественные
            препараты
            известных производителей. У меня вы можете сделать как отдельные процедуры, так и комплексную коррекцию
            лица,
            и если необходимо, тела.</p>
        <div class="col my-3">
            <a href="<? $_SERVER['DOCUMENT_ROOT']?>/procedures/mesohead.php">
                <img src="<? $_SERVER['DOCUMENT_ROOT']?>/images/main/meso_main_pic.jpg" alt="mezo_main_pic"
                    width="200px" style="max-height: 200px;" class="rounded-circle">
                <p class="my-3">Мезо процедуры</p>
            </a>

        </div>
        <div class="col my-3">
            <a href="<? $_SERVER['DOCUMENT_ROOT']?>/procedures/peeling.php">
                <img src="<? $_SERVER['DOCUMENT_ROOT']?>/images/main/peeling_main_pic.jpg" alt="peeling_main_pic"
                    width="200px" style="max-height: 200px;" class="rounded-circle">
                <p class="my-3">Пилинги</p>
            </a>

        </div>
        <div class="col my-3">
            <a href="<? $_SERVER['DOCUMENT_ROOT']?>/procedures/faceclean.php">
                <img src="<? $_SERVER['DOCUMENT_ROOT']?>/images/main/faceclean_main_pic.jpg" alt="faceclean_main_pic"
                    width="200px" style="max-height: 200px;" class="rounded-circle">
                <p class="my-3">Чистка лица</p>
            </a>
        </div>
        <div class="col my-3">
            <a href="<? $_SERVER['DOCUMENT_ROOT']?>/procedures/laser.php">
                <img src="<? $_SERVER['DOCUMENT_ROOT']?>/images/main/laser_main_pic.jpg" alt="laser_main_pic"
                    width="200px" style="max-height: 200px;" class="rounded-circle">
                <p class="my-3">Лазерная косметология</p>
            </a>

        </div>
    </div>

    <div class="row align-items-start text-center my-3 p-5 preview">
        <h2 class="text-center mt-3 mb-5">Преимущества</h2>
        <div class="col">
            <div class="row align-items-start text-center m-3">
                <div class="col-3">
                    <i class="fa fa-heart fa-3x" aria-hidden="true"></i>
                </div>
                <div class="col-9">
                    <h4>Я люблю свою работу</h4>
                    <p>Я продолжаю развиваться и учиться. Мне приятно, когда мои клиенты сообщают мне, что
                        довольны
                        результатом. Мне нравится делать людей счастливыми.</p>
                </div>

            </div>

        </div>
        <div class="col">
            <div class="row align-items-start text-center m-3">
                <div class="col-3">
                    <i class="fa fa-check-square-o fa-3x" aria-hidden="true"></i>
                </div>
                <div class="col-9">
                    <h4>Контроль качества препаратов</h4>
                    <p>Тщательно подбираю и использую только сертифицированные препараты проверенных крупных
                        производителей. Новинки тестирую на себе прежде чем предложить вам.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="row align-items-start text-center m-3">
                <div class="col-3">
                    <i class="fa fa-info fa-3x" aria-hidden="true"></i>
                </div>
                <div class="col-9">
                    <h4>Бесплатная консультация</h4>
                    <p>В день процедуры вы можете получить бесплатную консультацию, например, подберу для вас
                        грамотный
                        домашний уход для поддержания здоровья вашей кожи.</p>
                </div>
            </div>
        </div>
    </div>

</main>

<?php require ($_SERVER['DOCUMENT_ROOT'].'/footer.php');?>