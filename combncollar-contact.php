<?php
session_start();
include_once 'combncollar-db.php';

$error = false;
if (isset($_POST['submit'])) {

    $name = $_SESSION['usr_name'];
    $service = mysqli_real_escape_string($con, $_POST['services']);
    $date = mysqli_real_escape_string($con, $_POST['date']);
    $time = mysqli_real_escape_string($con, $_POST['time']);
    //validations
    //$time1 = split(':',$time);
    //print_r($time1);
    if(($time < 10) || ($time > 17)) {
        $error = true;
        $time_error = "Our timings are 10AM - 5PM. Please select time accordingly.";
    }
    if ($error == false) {
        if(mysqli_query($con, "INSERT INTO appointments(name,service,date,time) VALUES('" . $name . "', '" . $service . "', '" . $date . "', '" . $time . "')")) {
             $successmsg = "Successfull! Waiting to pamper your furry baby";
        } else {
            $errormsg = "Error...Please try again later!";
        }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Comb & Collar - The dog lover's choice</title>
  
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Custom Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> 

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script> 

    <!-- Custom CSS -->
    <link href="css/comb n collar - style.css" rel="stylesheet">
   
    <!-- Script for validation -->
    <script>
    function formValidation()
    {
    var date=document.getElementById('date').value;
    var time=document.getElementById('time').value;
    
    if(date=='')
    {
      error = "Please select a date for appointment.\n";      
      alert(error);
      return false;
    }
    if(time=='')
    {
      error = "Please select appropriate time.\n";
      alert(error);
      return false;
    }    
    }
    </script>  

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
     <?php include('combncollar-header.inc') ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contact \ Book an appointmnet                    
                </h1>                
            </div>
        </div>
        <!-- /.row -->
        
        <!-- Project One -->
        <?php if (isset($_SESSION['usr_id'])) { 
              if($_SESSION['role']=='user') {?>
        <div class="row">
            <div class="col-sm-6">
                    <ul class="contact-list">
                        <li class="address">
                            <h5>Address</h5>
                            <p>315 Poplar Avenue, Apt # P553, Devon, PA-19333</p>
                        </li>
                        <li class="email">
                            <h5>Email</h5>
                            <a href="mailto:contactus-combncollar@gmail.com">contactus-combncollar@gmail.com</a>
                        </li>
                        <li class="timing">
                            <h5>Opening Hours:</h5>
                            <dl>
                                <dt>Monday - Saturday</dt>
                                <dd>10:00 AM &minus; 5:00 PM</dd>
                            </dl>
                        </li>
                    </ul>
                    
                </div>
                <div class="col-sm-6">
                 <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" name='contact' onSubmit="return formValidation();">                                    
                  <div class="form-group">                  
                  <label for="services" class="col-sm-2 control-label">Service:</label>   
                  <div class="col-sm-7">      
                  <select class="form-control" id="services" name="services">
                    <option>Wash & Fluff</option>
                    <option>Moisturizing Oatmeal Treatment</option>
                    <option>De-Skunking Bath and Treatment</option>
                    <option>pooch Makeover</option>
                    <option>pooch Pamper</option>
                  </select>
                  </div>
                  </div>
                  <div class="form-group">
               <!-- <div class="input-group date" data-provide="datepicker" id="datetimepicker1">  -->
                <label for="date" class="col-sm-2 control-label">Date</label>
                <div class="col-sm-7">
                    <input type="date" class="form-control" placeholder="Select Date" id="date" name="date" />                    
                </div>
                 </div>                 
                 <div class="form-group">
               <!-- <div class="input-group date" data-provide="datepicker" id="datetimepicker1">  -->
                <label for="time" class="col-sm-2 control-label">Time(24hr Format)</label>
                <div class="col-sm-7">
                    <input type="time" class="form-control" placeholder="Select Time" id="time" name="time" />
                    <span class="text-danger"><?php if(isset($time_error)) echo $time_error; ?></span>                    
                </div>
                 </div>                                  
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default" name="submit" id="submit">Save</button>
                    </div>
                  </div>
                </form>
                <span class="text-success"><?php if (isset($successmsg)) { 
                echo $successmsg;
                  $to = $_SESSION['usr_email'];
                  $subject = "Comb & Collar-Appointment Confirmation";
                  $txt = "Hello, Your appointment is scheduled on". $_POST['date'] . "at " . $_POST['time'];
                  $headers = "From: combncollar@gmail.com";

                  mail($to,$subject,$txt,$headers); } ?>
                </span>
                <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
                <img src="images/contact-dog.jpg" alt="Book A Groom" />
            </div>
        <?php } elseif($_SESSION['role']=='admin') { ?>
         <div class="row">
           <h2>Today's Appointments</h2>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Service</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php                                  
                                  $query="SELECT * FROM `appointments` where Date(`date`) like CURRENT_DATE()"; // Your Query 
                                  $result=mysqli_query($con,$query); // The result of your query
                                  while ($tableRow = mysqli_fetch_assoc($result)) { // Loops 3 times if there are 3 returned rows... etc   ?>
                                    <tr>
                                      <td><?php echo $tableRow['name']; ?></td>
                                      <td><?php echo $tableRow['service']; ?></td>
                                      <td><?php echo $tableRow['date']; ?></td>
                                      <td><?php echo $tableRow['time']; ?></td>
                                      </tr>
                              <?php  } ?>                                                                   
                                </tbody>
                            </table>
                        </div>
        </div>
        <?php }} else { ?>
        <div class="row">
            <div class="col-sm-6">
                <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src=https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3054.389238329785!2d-75.41520398506294!3d40.04441377941014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c694b8f360e4bf%3A0xd562da28c85df7f!2s315+Poplar+Ave%2C+Devon%2C+PA+19333!5e0!3m2!1sen!2sus!4v1480982846838"></iframe>
                </div>
          
             <div class="col-sm-6">
                    <ul class="contact-list">
                        <li class="address">
                            <h5>Address</h5>
                            <p>315 Poplar Avenue, Apt # Z553, Devon, PA-19333</p>
                        </li>
                        <li class="email">
                            <h5>Email</h5>
                            <a href="mailto:contactus-combncollar@gmail.com">contactus-combncollar@gmail.com</a>
                        </li>
                        <li class="timing">
                            <h5>Opening Hours:</h5>
                            <dl>
                                <dt>Monday - Saturday</dt>
                                <dd>10:00 AM &minus; 5:00 PM</dd>
                            </dl>
                        </li>
                    </ul>
                </div>
        </div>
        <?php } ?>
        <!-- /.row -->

        <hr>

        

        <hr>

               <!-- Footer -->
    <?php include('combncollar-footer.inc') ?>

    </div>
    <!-- /.container -->

</body>

</html>
