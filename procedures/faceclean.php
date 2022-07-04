<?php

$title = 'Комбинированная и ультразвуковая чистка лица как решение эстетических проблем кожи';
$description = 'Чтобы оставаться здоровой и чистой, наша кожа нуждается в ежедневном очищении и бережном уходе';
$keywords = 'чистая кожа ультразвуковая комбинированная звуковая чистка атравматичная процедура проблемная кожа';

require ($_SERVER['DOCUMENT_ROOT'].'/db__access/db__conn.php');

$query = 'SELECT * FROM `faceclean`';
$results = mysqli_query($connection, $query);

$fc_types_query = 'SELECT * FROM `face_clean_types`';
$fc_types = mysqli_query($connection, $fc_types_query);

require ($_SERVER['DOCUMENT_ROOT'].'/header.php');
?>

<main class="container-fluid preview">

    <? foreach ($results as $result) { 
            
            if ($result['id']%2 !=0) { ?>

    <div class="row align-items-center ms-0 me-0 px-2 py-5 g-3 text-center">
        <div class="col-lg-6">
            <img src="<? $_SERVER['DOCUMENT_ROOT']?>/images/faceclean/<?php echo $result['image']?>" alt="faceclean"
                width="90%" class="procedure__img">
        </div>
        <div class="col-lg-6 p-3 procedure__description">
            <h4 class="mb-1"><?php echo $result['title']?></h4>
            <div class="my-1 p-2"><?php echo $result['description']?></div>
        </div>
    </div>

    <hr class="divider__line">

    <? } else { ?>

    <div class="row align-items-center ms-0 me-0 px-2 py-5 g-3 text-center">
        <div class="col-lg-6 p-3 procedure__description">
            <h4 class="mb-1"><?php echo $result['title']?></h4>
            <div class="my-1 p-2"><?php echo $result['description']?></div>
        </div>
        <div class="col-lg-6">
            <img src="<? $_SERVER['DOCUMENT_ROOT']?>/images/faceclean/<?php echo $result['image']?>" alt="faceclean"
                width="90%" class="procedure__img">
        </div>
    </div>

    <hr class="divider__line">
    <? } 
            
    } ?>

    <div class="row align-items-center ms-0 me-0 px-2 py-5 g-3 text-center">
        <div class="col procedure__description p-3">
            <h2 class="mb-1">Разновидности чистки</h2>
            <?php 
            foreach ($fc_types as $fc_type) {?>
            <h5 class="my-2 p-2"><?php echo $fc_type['fc_types']?></h5>
            <p class="my-2 p-2"><?php echo $fc_type['fc_description']?></p>
            <?}
            ?>
        </div>
    </div>

</main>

<? mysqli_close($connection);

require ($_SERVER['DOCUMENT_ROOT'].'/footer.php');
?>