<?php
session_start();
include_once 'combncollar-db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="refresh" content="0; URL:http://localhost:8080/Final Project/index.php">
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
    
    	<!-- Btn CSS -->
	  <!--<link rel="stylesheet" href="css/spritebtn.css">  -->
   
    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 10 //changes the speed
    })
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
   
    
        <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">  
                <div class="fill" style="background-image:url('images/slide2.jpg');"></div>
                <div class="carousel-caption">
                    <div class="column">
							       <div class="col-xs-4">
                         <h1 class="animated fadeInLeft" style="font-size:60px; text-align:left;">Make your dog look like million bucks</h1>                         
                     </div>
                    </div>     
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/slide5.jpg');"></div>
                <div class="carousel-caption">
                    <div class="column">
							       <div class="col-lg-12">
                         <h1 class="animated fadeInCenter" style="font-size:60px; text-align:center;">Spa is pure Bliss</h1>                         
                     </div>
                    </div>     
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/slide4.jpg');"></div>
                <div class="carousel-caption">
                    <div class="column">
							       <div class="col-lg-12">
                         <h1 class="animated fadeInCenter" style="font-size:60px; text-align:center;"><p>We promise you-Happy Jumps of your pooch</p></h1>                         
                     </div>
                    </div>     
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to Comb & Collar
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Spa Services </h4>
                    </div>
                    <div class="panel-body">
                    <img class="alignleft marB0" src="images/spa-dog.png" alt="spa" />
                        <p>We at Comb & Collar believe that every dog gains health benefits from feeling clean, light, pampered and groomed. 
                        And for us getting into this space was a well thought of decision, being passionate dog lovers ourselves.
                        </p>
                        <!--<a href="#" class="theme-button sprite">Learn More</a>   -->

                    <a href="combncollar-services.php" class="btn btn-warning">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-question-circle"></i> FAQs - Dog Grooming </h4>
                    </div>
                    <div class="panel-body">  
                    <img src="images/faqs-dog.png" alt="spa" />   
                        <p>
                            <ul class="featured-list">
                            <li>You make them happy &amp; smelling nice!</li>                            
                            <li>Removes dead hair and dirt which dwells parasites and mites!</li>
                            <li>Trimming nails regularly prevents pressure on paws which may lead to joint problems.</li>
                        </ul>
                        </p>
                        <a href="combncollar-faq.php" class="btn btn-warning">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-sign-in"></i> Sign Up </h4>
                    </div>
                    <div class="panel-body">
                    <img class="img-circle" src="images/signup-dog.png" alt="spa" />
                        <p>We offer competitive pricing and many specials!
                        Sign up to recieve important medical advice for your four dog, grooming tips, 
                        coupons and much more...
                        You'll get answers on dealing with itchy skin, bad breath, smelly ears, constant paw licking and more!</p>
                        <a href="combncollar-register.php" class="btn btn-warning">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Help Us</h2>
            </div>
            <div class="col-md-6">
                <p>If the kindest souls were rewarded with the longest lives, pets would outlive us all.
                Our furry babies remind us we have an obligation and responsibility to preserve and nurture and care for all life.</p>
                <p> Helping an animal charity will directly Make A Difference to animal's lives. 
                This could be anything from giving pet food to your local rescue centre, adopting a rescued animal, 
                volunteering at your local shelter or supporting fundraising events or making a donation, 
                and loads of things besides.
                Blue Cross of Hyderabad works to rescue animals from abuse, pass humane laws and share resources with shelters nationwide. 
                We support Blue Cross of Hyderabad. Your help can ensure Blue Cross of Hyderabad thrive in it's cause.
                </p>    
                <a href="http://bluecrosshyd.org/" class="btn btn-primary">Blue Cross</a>            
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="images/charity-dog.jpg" alt="">
            </div>
        </div>
        <!-- /.row -->

        <!-- Footer -->
         <?php include('combncollar-footer.inc') ?>
    </div>
    <!-- /.container -->
    
</body>

</html>
