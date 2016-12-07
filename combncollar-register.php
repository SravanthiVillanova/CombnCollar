<?php
session_start();

if(isset($_SESSION['usr_id'])) {
    header("Location: index.php");
}

include_once 'combncollar-db.php';

//set validation error flag as false
$error = false;

//check if form is submitted
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['mail']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    $role = "admin";
    $sql="SELECT * FROM users WHERE email='$email'";
    $result=mysqli_query($con,$sql);

    // Mysql_num_row is counting table row
    $count=mysqli_num_rows($result);
    // If result matched $myusername and $mypassword, table row must be 1 row
    if($count!= 0){
        $error = true;
        $email_error = "email already registered. Please register with a different one.";
    } 
    if($password != $cpassword) {
        $error = true;
        $cpassword_error = "Password and Confirm Password doesn't match";
    }
    if (!$error) {
    if($count == 0) {
        if(mysqli_query($con, "INSERT INTO users(name,email,pwd,role) VALUES('" . $name . "', '" . $email . "', '" . md5($password) . "', '" . $role . "')")) {
            $successmsg = "Successfully Registered! <a href='combncollar-login.php'>Click here to Login</a>";
        } else {
            $errormsg = "Error in registering...Please try again later!";
        }
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
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script> 

    <!-- Custom CSS -->
    <link href="css/comb n collar - style.css" rel="stylesheet">
   
    <!-- Script to validate registeration form fields -->
    <script>
    function formValidation()
    {
    var name=document.getElementById('name').value;
    //var name=document.registration.name.value;
    var password=document.getElementById('password').value;
    var mail=document.getElementById('mail').value;
    var chk = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if(name=='')
    {
      error = "Enter your name\n";
      //$('#er').html('Enter your name');
      alert(error);
      return false;
    }
    if(password=='')
    {
      error = "Enter your password\n";
      //$('#er').html('Enter your password');
      alert(error);
      return false;
    }
    if(mail=='')
    {
      //$('#er').html('Enter your mail');
      error = "Enter your email\n";
      alert(error);
      return false;
    }
   /* if(!chk.test(mail))
    {
      $('#er').html('Enter valid email');
      return false;
    } */
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
                <h1 class="page-header" style="color:#0099ff;">Register as a user</h1>                                   
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-12">
                <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" name='registration' onSubmit="return formValidation();">                  
                  <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-7">
                    <input type="text" class="form-control" id="name" placeholder="User Name" name="name" required value="<?php if($error) echo $name; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="mail" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-7">
                    <input type="email" class="form-control" id="mail" placeholder="Email" name="mail" required value="<?php if($error) echo $email; ?>">
                    <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-7">
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="cpassword" class="col-sm-2 control-label">Confirm Password</label>
                    <div class="col-sm-7">
                    <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password" name="cpassword">
                    <span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
                    </div>
                  </div>                  
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default" name="submit" id="submit">Sign in</button>
                    </div>
                  </div>
                </form>
                <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
                <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">    
        Already Registered? <a href="combncollar-login.php">Login Here</a>
        </div>
        
        <hr>

     <!-- Footer -->
   <?php include('combncollar-footer.inc') ?>
    </div>
    <!-- /.container -->    
</body>
</html>
