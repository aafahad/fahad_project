<?php
include_once('conection.php');
$hobby = implode(',', $_POST['hobby']);
$city = implode(',', $_POST['city']);
$query="INSERT INTO `project`.`registration` (
                                            `first_name` ,
                                            `last_name` ,
                                            `email` ,
                                            `password` ,
                                            `gender` ,
                                            `bday` ,
                                            `hobby` ,
                                            `city` ,
                                            `comment` ,
                                            `created` ,
                                            `modified`
)
VALUES (
'".$_POST['firstname']."',
'".$_POST['lastname']."',
'".$_POST['email']."',
'".$_POST['password']."',
'".$_POST['gender']."',
'".$_POST['b_year'].'-'.$_POST['b_month'].'-'.$_POST['b_day']."',
'".$hobby."',
'".$city."',
'".$_POST['comment']."',
NOW( ) ,
''
);";
mysqli_query($link, $query);
header('location:signin.php');