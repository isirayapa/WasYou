<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>washyou</title>
    
    <!-- core CSS -->
    <link href="<?php echo base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
   
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>/assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>/assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>/assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>/assets/images/ico/apple-touch-icon-57-precomposed.png">
    <?php echo $map['js']; ?> 
    </head><!--/head-->

<body>

    <nav class="navbar navbar-inverse" role="banner" style="background-color:#339cff;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right" >
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo site_url('login/index') ?>">Home</a></li>
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="portfolio.html">Proceed</a></li>
                        <li><a href="<?php echo site_url('manageprofile/index') ?>">Contact</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

    <section id="contact-info">
        <div class="center">                
            <h2>Always at your service</h2>
            
        </div>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <!-- <div class="gmap"> -->
                            <?php echo $map['html']; ?>
                        <!-- </div> -->
                    </div>

                    <div class="col-sm-7 map-content">
                        <ul class="row">
                            <li class="col-sm-6">
                                <address>
                                    <h5>WashYou</h5>
                                    <p>N0. 88,<p>
                                    <p>Station Road,<p>
                                    <p>Wellawatta</p>
                                    
                                </address>

                                
                            </li>


                            <li class="col-sm-6">
                                <address>
                                <h5>Phone:</h5>
                                    <p>0112354223 <br>
                                    <h5>Email Address:</h5>
                                    washyou@gmail.com</p>
                                </address>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

    <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>Manage Profile</h2>
                
            </div> 
            <div class="row contact-wrap"> 
            
                <div class="status alert alert-success" style="display: none"></div>
                <!--<form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">-->
                <?php echo form_open('manageprofile'); ?>
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name </label>
                            <input type="text" name="name" class="form-control"  value="<?php echo $results[0]->name; ?>" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email </label>
                            <input type="email" name="email"  value="<?php echo $results[0]->email; ?>"  class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Contact Number</label>
                            <input type="text" name= "contact_no"  value="<?php echo $results[0]->contact_no; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                        </div> 
                        <div class="form-group">
                            <label>Confirm password</label>
                            <input type="password" name="confirmpassword" class="form-control">
                        </div>                       
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>District</label>
                            <input type="text" name="subject" name="district"  value="<?php echo $results[0]->district; ?>" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="textarea" id="message" name="address"  value="<?php echo $results[0]->address; ?>" required="required" class="form-control" >
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required" style="background-color:#339cff;">Save</button>
                          
                            
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

    <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Company</h3>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">We are hiring</a></li>
                            <li><a href="#">Meet the team</a></li>
                            <li><a href="#">Copyright</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Support</h3>
                        <ul>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Forum</a></li>
                            <li><a href="#">Documentation</a></li>
                            <li><a href="#">Refund policy</a></li>
                            <li><a href="#">Ticket system</a></li>
                            <li><a href="#">Billing system</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Developers</h3>
                        <ul>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">SEO Marketing</a></li>
                            <li><a href="#">Theme</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Email Marketing</a></li>
                            <li><a href="#">Plugin Development</a></li>
                            <li><a href="#">Article Writing</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Our Partners</h3>
                        <ul>
                            <li><a href="#">Adipisicing Elit</a></li>
                            <li><a href="#">Eiusmod</a></li>
                            <li><a href="#">Tempor</a></li>
                            <li><a href="#">Veniam</a></li>
                            <li><a href="#">Exercitation</a></li>
                            <li><a href="#">Ullamco</a></li>
                            <li><a href="#">Laboris</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>