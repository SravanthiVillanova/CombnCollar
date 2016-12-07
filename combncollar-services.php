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
    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script> 

    <!-- Custom CSS -->
    <link href="css/comb n collar - style.css" rel="stylesheet">

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
                <h1 class="page-header">Our Services                    
                </h1>                
            </div>
        </div>
        <!-- /.row -->

        <!-- Project One -->
        <div class="row">
            <div class="col-md-7">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="images/service-dog-1.jpg" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Wash & Fluff </h3>
                <h4>One of our most popular treatments..</h4>
                <p>This 1-2 hour all over cleansing treatment is suited to dogs that have short coats or those with long coats that 
                require minimal brushing or de-matting.  This treatment includes a hydro-massage bath with conditioning aromatherapy shampoo, 
                blow dry, full body brushing, trim of eyes, feet and private area (if needed), aromatherapy ear cleansing, and nail trim 
                and file.</p>
                
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Two -->
        <div class="row">
            <div class="col-md-7">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="images/service-dog-2.jpg" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Moisturizing Oatmeal Treatment</h3>
                <h4>Soothing relief for dry, itchy skin...</h4>
                <p>Soothing relief for dry, itchy skin. 
                The nourishing properties of colloidal oatmeal combined with a soap-free formula restores moisture to the coat and skin.</p>
                
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Three -->
        <div class="row">
            <div class="col-md-7">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="images/service-dog-3.jpg" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>De-Skunking Bath and Treatment</h3>
                <h4>Skunk odor eliminator..</h4>
                 <p>A safe and non-toxic treatment formulated to help eliminate the skunk odor from your pet. 
                 Please Note: If your pet was sprayed in the face (nose and mouth areas) the skunk odor will remain noticeable 
                 to some degree and may take time for the odor to completely dissipate.</p>
                
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Four -->
        <div class="row">

            <div class="col-md-7">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="images/service-dog-7.jpg" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>pooch Makeover</h3>
                <h4>Rejuvenate pooch's body and mind</h4>
                <p>This 2-3 hour treatment includes a hydro-massage bath with conditioning aromatherapy shampoo, blow dry, 
                full body brushing, aromatherapy ear cleansing, nail trim and file, and either a full haircut, all over trim, 
                or undercoat de-shedding.</p>
                
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Five -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive img-hover" src="images/service-dog-6.jpg" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>pooch Pamper</h3>
                <h4>Full star treatment for your pooch</h4>
                <p>This 3-4 hour treatment includes a hydro-massage bath with aromatherapy shampoo, aromatherapy conditioning 
                treatment with 15 minute body massage, heated towel wrap, teeth brushing (non-descaling), facial, gentle blow dry, 
                full body brushing, aromatherapy ear cleansing, nail trim and file, paw massage with hydrating balm, and either a 
                full haircut, all over trim, or undercoat de-shedding.</p>
                
            </div>
        </div>
        <!-- /.row -->

        <hr>

               <!-- Footer -->
    <?php include('combncollar-footer.inc') ?>

    </div>
    <!-- /.container -->

</body>

</html>
