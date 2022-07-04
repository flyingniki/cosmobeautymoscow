<?php

$title = 'Админ панель';
require ($_SERVER['DOCUMENT_ROOT'].'/header.php');
require ($_SERVER['DOCUMENT_ROOT'].'/db__access/db__conn.php');
require ($_SERVER['DOCUMENT_ROOT'].'/admin/admin__info.php');

$query = mysqli_query($connection, "SELECT * FROM `biorev`");
?>

<main class="container-fluid preview p-2">
    <div class="table-responsive">
        <table class="table caption-top table-bordered fst-italic" style="background-color: #e0d7c9;">
            <caption class="fs-2 text-center mb-4 p-2 fw-bold">Управление данными таблицы</caption>
            <div class="text-end mt-3 fst-italic">
                <a href="<? $_SERVER['DOCUMENT_ROOT']?>/admin/index.php">Вернуться к списку процедур</a>
            </div>
            <thead class="text-center fs-4 border-light" style="color: #434343;">
                <tr>
                    <th>ID</th>
                    <th>Название процедуры</th>
                    <th>Описание</th>
                    <th>Картинка</th>
                    <th>Противопоказания</th>
                    <th>&#9998</th>
                    <th>&#10006</th>
                </tr>
            </thead>
            <tbody class="text-start fs-6 border-light"">
        <? foreach ($query as $res) {?>
        <tr>
            <td><? echo $res['id'] ?></td>            
            <td><? echo $res['title'] ?></td>
            <td><? echo $res['description'] ?></td>
            <td><? echo $res['image'] ?></td>
            <td><? 
            if (isset ($res['contraindications']))
            echo $res['contraindications'] ?></td>
            <td class=" text-center"><a href="update__item.php?id=<? echo $res['id'] ?>">Обновить</a></td>
                <td class="text-center"><a href="delete.php?id=<? echo $res['id'] ?>">Удалить</a></td>

                </tr>
                <?}?>
            </tbody>
        </table>
    </div>

    <form action="create.php" method="post">
        <div class="my-3">
            <label class="form-label">ID процедуры</label>
            <input type="text" name="procedure__id" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Название процедуры</label>
            <input type="text" name="procedure__title" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Описание</label>
            <input type="text" name="procedure__description" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Картинка</label>
            <input type="text" name="procedure__image" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Противопоказания</label>
            <input type="text" name="procedure__contraindications" class="form-control">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-secondary mb-3">Отправить</button>
        </div>
    </form>
</main>


<?php 
mysqli_close($connection);
require ($_SERVER['DOCUMENT_ROOT'].'/footer.php');