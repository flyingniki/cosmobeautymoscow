<?php

$title = 'Косметология в Москве со скидками для постоянных клиентов';
$description = 'Лазерная эпиляция, электроэпиляция, пилинги, чистка лица, LPG массаж тела по приятным ценам';
$keywords = 'приятные адекватные цены скидки недорого бесплатная консультация';

require ($_SERVER['DOCUMENT_ROOT'].'/db__access/db__conn.php');

$price = 'SELECT * FROM `price`';
$price_laser = 'SELECT * FROM `price_laser`';

$results_price = mysqli_query($connection, $price);
$results_laser = mysqli_query($connection, $price_laser);

 
require ($_SERVER['DOCUMENT_ROOT'].'/header.php');
?>

<main class="container-fluid preview p-2">
    <div class="table-responsive">
        <table class="table caption-top table-bordered fst-italic" style="background-color: #e0d7c9;">
            <caption class="fs-2 text-center mb-4 p-2 fw-bold">Прайслист</caption>
            <thead class="text-center fs-4 border-light" style="color: #434343;">
                <tr>
                    <th style="width: 40%;" scope="col">Название процедуры</th>
                    <th style="width: 20%;" scope="col">Продолжительность</th>
                    <th style="width: 40%;" scope="col">Цена, руб</th>
                </tr>
            </thead>
            <tbody class="text-start fs-5 border-light">
                <?php foreach ($results_price as $result_price) {?>
                <tr>
                    <td><?php echo $result_price['procedure_title']?></td>
                    <td class="text-center"><?php echo $result_price['time']?></td>
                    <td class="text-center"><?php echo $result_price['price']?></td>
                </tr>
                <?}?>
                <tr>
                    <th class="text-center fs-4" style="color: #434343;" colspan="3" scope="col">Лазерная диодная
                        эпиляция</th>
                </tr>
                <?php foreach ($results_laser as $result_laser) {?>
                <tr>
                    <td><?php echo $result_laser['procedure_title']?></td>
                    <td class="text-center"><?php echo $result_laser['time']?></td>
                    <td class="text-center"><?php echo $result_laser['price']?></td>
                </tr>
                <?}?>
            </tbody>
        </table>
    </div>
</main>

<?php
require ($_SERVER['DOCUMENT_ROOT'].'/footer.php');
?>