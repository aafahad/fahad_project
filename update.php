
<?php
include_once('header.php');
$id = $_POST['id'];
include_once('conection.php');
$hobby = implode(',', $_POST['hobby']);
$city = implode(',', $_POST['city']);
$query ="UPDATE `project`.`registration` SET `first_name`='".$_POST['firstname']."',
`last_name`='".$_POST['lastname']."',
`email`='".$_POST['email']."',
`password`='".$_POST['password']."',
`gender`='".$_POST['gender']."',
`bday`='".$_POST['b_year'].'-'.$_POST['b_month'].'-'.$_POST['b_day']."',
`gender`='".$_POST['gender']."',
`hobby`='".$hobby."',
`city`='".$city."',
`comment`='".$_POST['comment']."',
`modified`=NOW()
WHERE `registration`.`id` = $id;";
//echo $query;
mysqli_query($link, $query);
header('location:list.php');
include_once('footer.php');
