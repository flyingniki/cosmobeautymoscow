<?php

require ($_SERVER['DOCUMENT_ROOT'].'/db__access/db__conn.php');

$item__id = $_GET['id'];

mysqli_query($connection, "DELETE FROM `faceclean` WHERE `faceclean`.`id` = '$item__id'");
header('Location: admin.php');