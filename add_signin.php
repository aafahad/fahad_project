

<?php
//print_r($_SERVER['REQUEST_METHOD']);
session_start();
if($_SERVER['REQUEST_METHOD'] == "GET")
{
    header("location:signin.php");
}
if(isset($_POST['email']) && empty($_POST['email'])) {
    $_SESSION['msgname'] = "Email is Required";
    header('location:signin.php');
}
if(isset($_POST['password']) && empty($_POST['password'])){
    $_SESSION['msgpass'] = "Password is Required";
    header('location:signin.php');
}
$email = $_POST['email'];
$password = $_POST['password'];
//exit;
include_once('conection.php');
$query = "SELECT * FROM registration WHERE `email` = '$email' AND `password` = '$password'";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
//var_dump($row);
//var_dump($row['username']);
//var_dump($row['password']);
//var_dump($row['email']);
//exit;
if($row)
{
//(SEND Data to the SESSION and GO to The Dashboard)
    $_SESSION['id']=$row['id'];
    $_SESSION['firstname']=$row['first_name'];
    $_SESSION['lastname']=$row['last_name'];
    $_SESSION['email']=$row['email'];
    $_SESSION['password']=$row['password'];
    $_SESSION['gender']=$row['gender'];
    $_SESSION['bday']=$row['bday'];
    $_SESSION['hobby']=$row['hobby'];
    $_SESSION['city']=$row['city'];
    $_SESSION['comment']=$row['comment'];
    $_SESSION['created']=$row['created'];
    $_SESSION['modified']=$row['modified'];
    header('location:index11.html');
}
else
{
//(Redirect to the Login page with a Message)
    $_SESSION['msg'] = "Invalid Email or Password.";
    header('location:signin.php');
}
?>