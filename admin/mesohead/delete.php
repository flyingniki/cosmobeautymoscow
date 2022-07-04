<?php

require ($_SERVER['DOCUMENT_ROOT'].'/db__access/db__conn.php');

$item__id = $_GET['id'];

mysqli_query($connection, "DELETE FROM `mesohead` WHERE `mesohead`.`id` = '$item__id'");
header('Location: admin.php');