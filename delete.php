<?php
include_once('header.php');
$id = $_GET['id'];
include_once('conection.php');
$query = "DELETE FROM `project`.`registration` WHERE `registration`.`id` = $id";
mysqli_query($link, $query);
header('location:list.php');

include_once('footer.php');