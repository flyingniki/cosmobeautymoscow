<?php

$title = 'Редактирование процедуры';
require ('../header.php');
require ('../db__access/db__conn.php');
require ('admin__info.php');
?>

<main class="container-fluid preview p-2 text-center">
    <div class="dropdown my-2">
        <button class="btn btn-lg btn-secondary dropdown-toggle" type="button" id="dropdownMenuProcedureList"
            data-bs-toggle="dropdown" aria-expanded="false">
            Выбери процедуру
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuProcedureList">
            <? foreach ($pr__names as $pr__name => $pr__name__rus) {?>
            <li class="text-center"><a class="dropdown-item" href="<?=$pr__name?>/admin.php"><?=$pr__name__rus?></a>
            </li>
            <?}?>
        </ul>
    </div>
</main>

<?php 
mysqli_close($connection);
require ('../footer.php');