
<?php
session_start();
include_once('header.php');
$id = $_SESSION['id'];
include_once('conection.php');
$query = "select * from registration WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Active Info</title>
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap1.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap2.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <script src="js/bootstrap3.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body >
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-toggle"></span>
            </button>
            <a class="navbar-brand" href="#">Control Panel</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">
                        <i class="glyphicon glyphicon-user"></i> Admin <span class="caret"></span></a>
                    <ul id="g-account-menu" class="dropdown-menu" role="menu">
                        <li><a href="view1.php">My Profile</a></li>
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a href="list.php">Admin Info List</a></li>
                        <li><a href="logout.php"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /container -->
</div>
<section class="container">
    <div class="row">
        <div class="col-sm-3">
            <!-- left -->
            <h3><i class="glyphicon glyphicon-briefcase"></i> Toolbox</h3>
            <hr>
            <ul class="nav nav-stacked">
                <li><a href="javascript:;"><i class="glyphicon glyphicon-flash"></i> Alerts</a></li>
                <li><a href="javascript:;"><i class="glyphicon glyphicon-link"></i> Links</a></li>
                <li><a href="javascript:;"><i class="glyphicon glyphicon-list-alt"></i> Reports</a></li>
                <li><a href="javascript:;"><i class="glyphicon glyphicon-book"></i> Books</a></li>
                <li><a href="javascript:;"><i class="glyphicon glyphicon-briefcase"></i> Tools</a></li>
                <li><a href="javascript:;"><i class="glyphicon glyphicon-time"></i> Real-time</a></li>
                <li><a href="javascript:;"><i class="glyphicon glyphicon-plus"></i> Advanced..</a></li>
            </ul>
            <hr>
        </div>
        <div class="col-md-8">
            <h3><i class="glyphicon glyphicon-dashboard"></i> Profile Info</h3>
            <hr>
            <table class="table table-striped">
                <tr>
                    <td>Field Name</td>
                    <td>Description</td>
                </tr>
                <?php
                foreach($result as $row) {
                    ?>
                    <tr>
                        <td>First Name</td>
                        <td><?php echo $row['first_name'] ?></td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td><?php echo $row['last_name'] ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?php echo $row['email'] ?></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><?php echo $row['password'] ?></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td><?php echo $row['gender'] ?></td>
                    </tr>
                    <tr>
                        <td>Birthday</td>
                        <td><?php echo $row['bday'] ?></td>
                    </tr>
                    <tr>
                        <td>Hobby</td>
                        <td><?php echo $row['hobby'] ?></td>
                    </tr>
                    <tr>
                        <td>City</td>
                        <td><?php echo $row['city'] ?></td>
                    </tr>
                    <tr>
                        <td>Comment</td>
                        <td><?php echo $row['comment'] ?></td>
                    </tr>
                    <tr>
                        <td>Created</td>
                        <td><?php echo $row['created'] ?></td>
                    </tr>
                    <tr>
                        <td>Modified</td>
                        <td><?php echo $row['modified'] ?></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</section>
<?php
include_once('footer.php');
?>
