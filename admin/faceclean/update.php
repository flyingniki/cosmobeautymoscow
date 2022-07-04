<?php
require ($_SERVER['DOCUMENT_ROOT'].'/db__access/db__conn.php');

$id__get = $_POST['id__get'];

$procedure__id = $_POST['procedure__id'];
$procedure__title = $_POST['procedure__title'];
$procedure__description = $_POST['procedure__description'];
$procedure__image = $_POST['procedure__image'];
$procedure__contraindications = $_POST['procedure__contraindications'];

mysqli_query($connection, "UPDATE `faceclean` SET `id` = '$procedure__id', `title` = '$procedure__title', `description` = '$procedure__description', `image` = '$procedure__image', `contraindications` = '$procedure__contraindications' WHERE `faceclean`.`id` = '$id__get'");
header('Location: admin.php');