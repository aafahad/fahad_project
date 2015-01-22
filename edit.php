<?php
include_once('header.php');
$id = $_GET['id'];
include_once('conection.php');
$query = "select * from registration WHERE id = $id;";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
$barray=explode("-", $row['bday']);
list($b_year,$b_month,$b_day)= $barray;
$hob=explode(",", $row['hobby']);
$city=explode(",",$row['city'])
//echo $row['birth_day'];
//var_dump($barray);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap1.min.css">
</head>
<body>
<section class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="well well-lg">
                <form action="update.php" method="post" class="form-horizontal">
                    <div class="form-group">
                        <div class="col-sm-10">
                            <input type="hidden" name="id" class="form-control" value="<?php echo $row['id'];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">FirstName</label><span style="color: red">*</span>
                        <div class="col-sm-10">
                            <input type="text" name="firstname" class="form-control" value="<?php echo $row['first_name'];?>" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">LastName</label><span style="color: red">*</span>
                        <div class="col-sm-10">
                            <input type="text" name="lastname" class="form-control" value="<?php echo $row['last_name'];?>" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Email</label><span style="color: red">*</span>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" value="<?php echo $row['email'];?>" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Password</label><span style="color: red">*</span>
                        <div class="col-sm-10">
                            <input type="password" name="password" class="form-control" value="<?php echo $row['password'];?>" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Gender</label><span style="color: red">*</span>
                        <div class="col-sm-10">
                            <label class="radio-inline">
                                <input type="radio" name="gender" id="inlineRadio1" <?php if($row['gender'] == 'Male') echo 'checked' ?> value="Male" > Male
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="gender" id="inlineRadio2" <?php if($row['gender'] == 'Female') echo 'checked' ?> value="Female"> Female
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="gender" id="inlineRadio3" <?php if($row['gender'] == 'Others') echo 'checked' ?> value="Others"> Others
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Date of Birth</label><span style="color: red">*</span>
                        <div class="col-sm-10">
                            <select name="b_year" class="form-control" required="required">
                                <option value="">---Select year---</option>
                                <option <?php if($b_year=='2000') echo 'selected'?> value="2000">2000</option>
                                <option <?php if($b_year=='1999') echo 'selected'?> value="1999">1999</option>
                                <option <?php if($b_year=='1998') echo 'selected'?> value="1998">1998</option>
                                <option <?php if($b_year=='1997') echo 'selected'?> value="1997">1997</option>
                                <option <?php if($b_year=='1996') echo 'selected'?> value="1996">1996</option>
                                <option <?php if($b_year=='1995') echo 'selected'?> value="1995">1995</option>
                            </select>
                            <select name="b_month" class="form-control" required="required">
                                <option value="">---Select Month---</option>
                                <option <?php if($b_month=='01') echo 'selected'?> value="01">January</option>
                                <option <?php if($b_month=='02') echo 'selected'?> value="02">February</option>
                                <option <?php if($b_month=='03') echo 'selected'?> value="03">March</option>
                                <option <?php if($b_month=='04') echo 'selected'?> value="04">April</option>
                                <option <?php if($b_month=='05') echo 'selected'?> value="05">May</option>
                                <option <?php if($b_month=='06') echo 'selected'?> value="06">June</option>
                                <option <?php if($b_month=='07') echo 'selected'?> value="07">July</option>
                                <option <?php if($b_month=='08') echo 'selected'?> value="08">August</option>
                                <option <?php if($b_month=='09') echo 'selected'?> value="09">September</option>
                                <option <?php if($b_month=='10') echo 'selected'?> value="10">October</option>
                                <option <?php if($b_month=='11') echo 'selected'?>value="11">November</option>
                                <option <?php if($b_month=='12') echo 'selected'?> value="12">December</option>
                            </select>
                            <select name="b_day" class="form-control" required="required">
                                <option value="">---Select Day---</option>
                                <option <?php if($b_day=='01') echo 'selected'?> value="01">01</option>
                                <option <?php if($b_day=='02') echo 'selected'?> value="02">02</option>
                                <option <?php if($b_day=='03') echo 'selected'?> value="03">03</option>
                                <option <?php if($b_day=='04') echo 'selected'?> value="04">04</option>
                                <option <?php if($b_day=='05') echo 'selected'?> value="05">05</option>
                                <option <?php if($b_day=='06') echo 'selected'?> value="06">06</option>
                                <option <?php if($b_day=='07') echo 'selected'?> value="07">07</option>
                                <option <?php if($b_day=='08') echo 'selected'?> value="08">08</option>
                                <option <?php if($b_day=='09') echo 'selected'?> value="09">09</option>
                                <option <?php if($b_day=='10') echo 'selected'?> value="10">10</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Hobby</label>
                        <div class="col-sm-10">
                            <label class="checkbox-inline">
                                <input type="checkbox" name="hobby[]" <?php if(in_array("Gardening",$hob)) echo 'checked'; ?> value="Gardening"> Gardening
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="hobby[]" <?php if(in_array("Travelling",$hob)) echo 'checked'; ?> value="Travelling"> Travelling
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="hobby[]" <?php if(in_array("Painting",$hob)) echo 'checked'; ?> value="Painting"> Painting
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="hobby[]" <?php if(in_array("Fishing",$hob)) echo 'checked' ;?> value="Fishing"> Fishing
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">City</label><span style="color: red">*</span>
                        <div class="col-sm-10">
                            <select name="city[]" multiple="multiple" class="form-control" required="required">
                                <option value=""></option>
                                <option <?php if(in_array("Dhaka",$city)) echo 'selected' ;?> value="Dhaka">Dhaka</option>
                                <option <?php if(in_array("Chittagong",$city)) echo 'selected' ;?> value="Chittagong">Chittagong</option>
                                <option <?php if(in_array("Sylhet",$city)) echo 'selected' ;?> value="Sylhet">Sylhet</option>
                                <option <?php if(in_array("Gajipur",$city)) echo 'selected' ;?> value="Gajipur">Gajipur</option>
                                <option <?php if(in_array("Rajshahi",$city)) echo 'selected' ;?> value="Rajshahi">Rajshahi</option>
                                <option <?php if(in_array("Kushtia",$city)) echo 'selected' ;?> value="Kushtia">Kushtia</option>
                                <option <?php if(in_array("Khulna",$city)) echo 'selected' ;?> value="Khulna">Khulna</option>
                                <option <?php if(in_array("Barisal",$city)) echo 'selected' ;?> value="Barisal">Barisal</option>
                                <option <?php if(in_array("Dinajpur",$city)) echo 'selected' ;?> value="Dinajpur">Dinajpur</option>
                                <option <?php if(in_array("Noakhali",$city)) echo 'selected' ;?> value="Noakhali">Noakhali</option>
                                <option <?php if(in_array("Feni",$city)) echo 'selected' ;?> value="Feni">Feni</option>
                                <option <?php if(in_array("Comilla",$city)) echo 'selected' ;?> value="Comilla">Comilla</option>
                                <option <?php if(in_array("Khagrachori",$city)) echo 'selected' ;?> value="Khagrachori">Khagrachori</option>
                                <option <?php if(in_array("Rangamati",$city)) echo 'selected' ;?> value="Rangamati">Rangamati</option>
                                <option <?php if(in_array("Jhinaidah",$city)) echo 'selected' ;?> value="Jhinaidah">Jhinaidah</option>
                                <option <?php if(in_array("Potuakhali",$city)) echo 'selected' ;?> value="Potuakhali">Potuakhali</option>
                                <option <?php if(in_array("Moulovibazar",$city)) echo 'selected' ;?> value="Moulovibazar">Moulovibazar</option>
                                <option <?php if(in_array("Rongpur",$city)) echo 'selected' ;?> value="Rongpur">Rongpur</option>
                                <option <?php if(in_array("Laxmipur",$city)) echo 'selected' ;?> value="Laxmipur">Laxmipur</option>
                                <option <?php if(in_array("Foridpur",$city)) echo 'selected' ;?> value="Foridpur">Foridpur</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Comment</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3" name="comment" ><?php echo $row['comment'];?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php
include_once('header.php');?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
