<?php

$title = 'Просмотр элемента обновления';
require ($_SERVER['DOCUMENT_ROOT'].'/header.php');
require ($_SERVER['DOCUMENT_ROOT'].'/db__access/db__conn.php');

$item__id = $_GET['id'];

$item = mysqli_query($connection, "SELECT * FROM `mesohead` WHERE id = '$item__id'");
$item = mysqli_fetch_assoc($item);

?>

<main class="container-fluid preview">
    <form action="update.php" method="post">
        <div class="my-3">
            <input type="hidden" name="id__get" class="form-control" value="<?= $item__id ?>">
        </div>
        <div class="my-3">
            <label class="form-label">ID процедуры</label>
            <input type="text" name="procedure__id" class="form-control" value="<?= $item['id']?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Название процедуры</label>
            <input type="text" name="procedure__title" class="form-control" value="<?= $item['title']?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Описание</label>
            <input type="text" name="procedure__description" class="form-control" value="<?= $item['description']?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Картинка</label>
            <input type="text" name="procedure__image" class="form-control" value="<?= $item['image']?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Противопоказания</label>
            <input type="text" name="procedure__contraindications" class="form-control"
                value="<?= $item['contraindications']?>">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-secondary mb-3">Обновить</button>
        </div>

    </form>
</main>

<?php 
mysqli_close($connection);
require ($_SERVER['DOCUMENT_ROOT'].'/footer.php');