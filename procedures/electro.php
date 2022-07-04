<?php

$title = 'Электроэпиляция любой зоны с любым цветом волос';
$description = 'Удаление волос с помощью электрических разрядов, позволяющее избавиться от волос навсегда';
$keywords = 'удаление волос электроэпиляция гладкая кожа светлые любые волосы';

require ($_SERVER['DOCUMENT_ROOT'].'/db__access/db__conn.php');

$query = 'SELECT * FROM `electro`';

$results = mysqli_query($connection, $query);
 
require ($_SERVER['DOCUMENT_ROOT'].'/header.php');
?>

<main class="container-fluid preview">

    <? foreach ($results as $result) { 
        
        if ($result['id']%2 !=0) { ?>

    <div class="row align-items-center ms-0 me-0 px-2 py-5 g-3 text-center">
        <div class="col-lg-6">
            <img src="<? $_SERVER['DOCUMENT_ROOT']?>/images/electro/<?php echo $result['image']?>" alt="electro"
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
            <img src="<? $_SERVER['DOCUMENT_ROOT']?>/images/electro/<?php echo $result['image']?>" alt="electro"
                width="90%" class="procedure__img">
        </div>
    </div>

    <hr class="divider__line">
    <? }
           
    }

    mysqli_close($connection);

    ?>
</main>

<?php
require ($_SERVER['DOCUMENT_ROOT'].'/footer.php');
?>