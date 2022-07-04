<?php 

require ($_SERVER['DOCUMENT_ROOT'].'/db__access/db__conn.php');

$procedure__id = $_POST['procedure__id'];
$procedure__title = $_POST['procedure__title'];
$procedure__description = $_POST['procedure__description'];
$procedure__image = $_POST['procedure__image'];
$procedure__contraindications = $_POST['procedure__contraindications'];

mysqli_query($connection, "INSERT INTO `guinot` (`id`, `title`, `description`, `image`, `contraindications`) VALUES ('$procedure__id', '$procedure__title', '$procedure__description', '$procedure__image', '$procedure__contraindications')");

header('Location: admin.php');