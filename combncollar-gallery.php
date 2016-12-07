<?php
session_start();
include_once 'combncollar-db.php';

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
    
    <script src="https://code.jquery.com/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>

    <!-- Custom CSS -->
    <link href="css/comb n collar - style.css" rel="stylesheet">
   

</head>

<body>

    <!-- Navigation -->
     <?php include('combncollar-header.inc') ?>
      <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12" style="color:#0099ff;">
                <h1 class="page-header">Comb & Collar Spa Gallery
                </h1>
                
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">
            <div class="col-md-8">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="7"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="8"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="9"></li>                        
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive" src="images/spa-1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="images/spa-2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="images/spa-3.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="images/spa-4.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="images/spa-5.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="images/spa-6.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="images/spa-7.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="images/spa-8.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="images/spa-9.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="images/spa-10.jpg" alt="">
                        </div>                      
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <h3>Our Mission & Purpose</h3>
                <p>Make your furry babies happy and smiling.</p>
                <p>We at Comb & Collar believe that every dog gains health benefits from feeling clean, light, 
                pampered and groomed. And for us getting into this space was a well thought of decision, being 
                passionate dog lovers ourselves. Ours is a fully air conditioned hygienic facility.</p>
                <h3>Our Core Values</h3>
                <ul>
                    <li>Sanitation and Cleanliness </li>
                    <li>Pet's Safety First </li>
                    <li>Service by professionally trained groomers </li>
                    <li>Quality </li>
                    <li>Individual Attention </li>
                </ul>
            </div>

        </div>
        <!-- /.row -->

               <!-- Footer -->
    <?php include('combncollar-footer.inc') ?>

    </div>
    <!-- /.container -->

</body>

</html>
          