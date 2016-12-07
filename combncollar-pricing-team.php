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
                <h1 class="page-header" style="color:#0099ff;">Our Prices:</h1> 
                </h1>                
            </div>
        </div>
        <!-- /.row -->

        <!-- Intro Content -->
        <div class="row">
            <h2>Services & Prices</h2>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Service</th>
                                        <th>Small Breeds($)</th>
                                        <th>Medium Breeds($)</th>
                                        <th>Large Breeds($)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php                                  
                                  $query="SELECT * FROM prices"; // Your Query 
                                  $result=mysqli_query($con,$query); // The result of your query
                                  //var_dump(mysqli_fetch_all($result));                                  
                                  while ($tableRow = mysqli_fetch_assoc($result)) { // Loops 3 times if there are 3 returned rows... etc   ?>
                                    <tr>
                                      <td><?php echo $tableRow['service']; ?></td>
                                      <td><?php echo $tableRow['small breed']; ?></td>
                                      <td><?php echo $tableRow['medium breed']; ?></td>
                                      <td><?php echo $tableRow['large breed']; ?></td>
                                      </tr>
                              <?php  } ?>                                                                     
                                </tbody>
                            </table>
                        </div>
        </div>
        <!-- /.row -->

        <!-- Team Members -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Our Team</h2>
            </div>
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <img class="img-responsive" src="images/team-1.jpg" alt="team member 1">
                    <div class="caption">
                        <h3>Felicia Harte<br>
                            <small>Lead Groomer at Comb & Collar</small>
                        </h3>
                        <p>elicia is a Kansas City native that has been grooming for over six years. 
                        Harte's love for animals started at a young age when she started raising exotic birds at nineteen years old. 
                        She started her grooming career working for a veterinary clinic learning grooming techniques in Overland Park, KS. 
                        Felicia was also quite active in the show dog arena showing Yorkshire Terriers and Australian Shepherds.

                        Harte has now been grooming at Comb & Collar for two years and has a very loyal clientele. 
                        When not busy at Dog Pawz she is working on her biology degree and is a mother of three. 
                        Harte takes pride in keeping updated on new products and trends to make sure her clients 
                        are getting the very best the grooming industry has to offer.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <img class="img-responsive" src="images/team-2.jpg" alt="team member 2">
                    <div class="caption">
                        <h3>Carolyn Scheller<br>
                            <small>Assistant Groomer at Comb & Collar</small>
                        </h3>
                        <p>Carolyn has been groomer at Comb & Collar since January 2016. 
                        She has been in the pet grooming business for over twenty years now, and loves it! 
                        Carolyn is a proud owner of one adorable dog and three precious cats. 
                        She is such a caring and kind hearted woman who loves animals, and 
                        has told us that her grandma always said 'if it has 4 legs she would bring it home.'</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <img class="img-responsive" src="images/team-3.jpg" alt="team-3">
                    <div class="caption">
                        <h3>Kathlyn Ice<br>
                            <small>Administrative Assistant/Marketing & Social Media Manager</small>
                        </h3>
                        <p>Kathlyn's role at Comb & Collar is the Administrative Assistant, Marketing Assistant, Graphic Designer, Photographer, 
                        and Social Media Manager! Katy has been apart of our Comb & Collar team for well over a 
                        year and she has done an excellent job adding some extra charisma to our company! She has been a life-long 
                        dog lover and has multiple years of dog care experience. Katy also has previous experience in owning her 
                        own business, marketing, graphic design, retail, and educated in dog skin care and bathing.</p>                        
                    </div>
                </div>
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