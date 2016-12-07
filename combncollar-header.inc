<!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="color:white;">Comb & Collar</a>
                <?php if(isset($_SESSION['usr_id'])){ ?>
                <p class="navbar-text" style="color:white;"><b>Hello </b><b><?php echo $_SESSION['usr_name']; ?></b>
                <?php } ?>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php" style="color:white;">Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:white;">Our Services <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="combncollar-services.php">Value Added Services</a>
                            </li>
                            <li>
                                <a href="combncollar-faq.php">FAQs</a>
                            </li>
                        </ul>
                    </li> 
                    <li>
                        <a href="combncollar-pricing-team.php" style="color:white;">Pricing & Team</a>
                    </li>
                    <li>
                        <a href="combncollar-gallery.php" style="color:white;">Gallery</a>
                    </li>
                    <li>
                        <a href="combncollar-contact.php" style="color:white;">Contact</a>
                    </li>
                     <?php if(isset($_SESSION['usr_id'])){ ?>                   
                    <li><a href="combncollar-logout.php" style="color:white;">Log Out</a></li>
                    <?php } else { ?>
                    <li><a href="combncollar-login.php" style="color:white;">Login</a></li>
                    <li><a href="combncollar-register.php" style="color:white;">Sign Up</a></li>
                    <?php } ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>