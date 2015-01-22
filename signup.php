<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Sign up - Progressus Bootstrap template</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<body style="background: darkslategray">

	<!-- Fixed navbar -->
    <body class="home">
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top headroom" >
        <div class="container">
            <div class="navbar-header">
                <!-- Button for smallest screens -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="index.php"><img src="images/gallery/CreativeGreenLogos_30.png" alt="Progressus HTML5 template"></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">More Pages <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="active"><a href="sidebar-left.php">Photo Gallery</a></li>
                            <li class="active"><a href="sidebar-right.php">PortFolio</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a class="btn" href="signin.php">SIGN IN</a></li>
                    <li class="active"><a class="btn" href="signup.php">SIGN UP </a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
    <!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Registration</li>
		</ol>


        <section class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="well well-lg">
                        <form action="add_user.php" method="post" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">FirstName</label><span style="color: red">*</span>
                                <div class="col-sm-10">
                                    <input type="text" name="firstname" class="form-control" placeholder="first name" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">LastName</label><span style="color: red">*</span>
                                <div class="col-sm-10">
                                    <input type="text" name="lastname" class="form-control" placeholder="last name" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Email</label><span style="color: red">*</span>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Password</label><span style="color: red">*</span>
                                <div class="col-sm-10">
                                    <input type="password" name="password" class="form-control" placeholder="password" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Gender</label><span style="color: red">*</span>
                                <div class="col-sm-10">
                                    <label class="radio-inline">
                                        <input type="radio" name="gender" id="inlineRadio1" value="Male"> Male
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="gender" id="inlineRadio2" value="Female"> Female
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="gender" id="inlineRadio3" value="Others"> Others
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Date of Birth</label><span style="color: red">*</span>
                                <div class="col-sm-10">
                                    <select name="b_year" class="form-control" required="required">
                                        <option value="">---Select year---</option>
                                        <option value="2000">2000</option>
                                        <option value="1999">1999</option>
                                        <option value="1998">1998</option>
                                        <option value="1997">1997</option>
                                        <option value="1996">1996</option>
                                        <option value="1995">1995</option>
                                    </select>
                                    <select name="b_month" class="form-control" required="required">
                                        <option value="">---Select Month---</option>
                                        <option value="01">January</option>
                                        <option value="02">February</option>
                                        <option value="03">March</option>
                                        <option value="04">April</option>
                                        <option value="05">May</option>
                                        <option value="06">June</option>
                                        <option value="07">July</option>
                                        <option value="08">August</option>
                                        <option value="09">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                    <select name="b_day" class="form-control" required="required">
                                        <option value="">---Select Day---</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Hobby</label>
                                <div class="col-sm-10">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="hobby[]" id="inlineCheckbox1" value="Gardening"> Gardening
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="hobby[]" id="inlineCheckbox2" value="Travelling"> Travelling
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="hobby[]" id="inlineCheckbox3" value="Painting"> Painting
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="hobby[]" id="inlineCheckbox4" value="Fishing"> Fishing
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">City</label><span style="color: red">*</span>
                                <div class="col-sm-10">
                                    <select name="city[]" multiple="multiple" class="form-control" required="required">
                                        <option value=""></option>
                                        <option value="Dhaka">Dhaka</option>
                                        <option value="Chittagong">Chittagong</option>
                                        <option value="Sylhet">Sylhet</option>
                                        <option value="Gajipur">Gajipur</option>
                                        <option value="Rajshahi">Rajshahi</option>
                                        <option value="Kushtia">Kushtia</option>
                                        <option value="Khulna">Khulna</option>
                                        <option value="Barisal">Barisal</option>
                                        <option value="Dinajpur">Dinajpur</option>
                                        <option value="Noakhali">Noakhali</option>
                                        <option value="Feni">Feni</option>
                                        <option value="Comilla">Comilla</option>
                                        <option value="Khagrachori">Khagrachori</option>
                                        <option value="Rangamati">Rangamati</option>
                                        <option value="Jhinaidah">Jhinaidah</option>
                                        <option value="Potuakhali">Potuakhali</option>
                                        <option value="Moulovibazar">Moulovibazar</option>
                                        <option value="Rongpur">Rongpur</option>
                                        <option value="Laxmipur">Laxmipur</option>
                                        <option value="Foridpur">Foridpur</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Comment</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="3" name="comment"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>


<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p>+234 23 9873237<br>
								<a href="mailto:#">some.email@somewhere.com</a><br>
								<br>
								234 Hidden Pond Road, Ashland City, TN 37015
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Follow me</h3>
						<div class="widget-body">
							<p class="follow-me-icons clearfix">
								<a href=""><i class="fa fa-twitter fa-2"></i></a>
								<a href=""><i class="fa fa-dribbble fa-2"></i></a>
								<a href=""><i class="fa fa-github fa-2"></i></a>
								<a href=""><i class="fa fa-facebook fa-2"></i></a>
							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">Text widget</h3>
						<div class="widget-body">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, dolores, quibusdam architecto voluptatem amet fugiat nesciunt placeat provident cumque accusamus itaque voluptate modi quidem dolore optio velit hic iusto vero praesentium repellat commodi ad id expedita cupiditate repellendus possimus unde?</p>
							<p>Eius consequatur nihil quibusdam! Laborum, rerum, quis, inventore ipsa autem repellat provident assumenda labore soluta minima alias temporibus facere distinctio quas adipisci nam sunt explicabo officia tenetur at ea quos doloribus dolorum voluptate reprehenderit architecto sint libero illo et hic.</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="#">Home</a> | 
								<a href="about.php">About</a> |
								<a href="sidebar-right.php">Sidebar</a> |
								<a href="contact.php">Contact</a> |
								<b><a href="signup.html">Sign up</a></b>
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2014, Your name. Designed by <a href="http://gettemplate.com/" rel="designer">gettemplate</a> 
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>
	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>