<?php
session_start();

if(isset($_SESSION['usr_id'])!="") {
    header("Location: index.php");
}

include_once 'combncollar-db.php';

//check if form is submitted
if (isset($_POST['submit'])) {

    $email = mysqli_real_escape_string($con, $_POST['mail']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $result = mysqli_query($con, "SELECT * FROM users WHERE email = '" . $email. "' and pwd = '" . md5($password) . "'");

    if ($row = mysqli_fetch_array($result)) {
    //var_dump($row);
        $_SESSION['usr_id'] = $row['id'];
        $_SESSION['usr_name'] = $row['name'];
        $_SESSION['usr_email'] = $row['email'];
        $_SESSION['role'] = $row['role'];
        header("Location: index.php");
    } else {
        $errormsg = "Incorrect Email or Password!!!";
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
    //var name=document.getElementById('sname').value;
    //var name=document.registration.name.value;
    var password=document.getElementById('password').value;
    var mail=document.getElementById('mail').value;
    
    if(mail=='')
    {
      //$('#er').html('Enter your mail');
      error = "Enter your email\n";
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

    <!-- Navigation header -->
   <?php include('combncollar-header.inc') ?>

     <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="color:#0099ff;">Login</h1>                                   
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-12">
                <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" name='registration' onSubmit="return formValidation();">                                    
                  <div class="form-group">
                    <label for="mail" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-7">
                    <input type="email" class="form-control" id="mail" placeholder="Email" name="mail">                    
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-7">
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default" name="submit" id="submit">Login</button>
                    </div>
                  </div>
                </form>
                <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">    
        New User? <a href="combncollar-register.php">Sign Up Here</a>
        </div>
        </div>
        
        <hr>

     <!-- Footer -->
   <?php include('combncollar-footer.inc') ?>
    </div>
    <!-- /.container -->    
</body>
</html>
