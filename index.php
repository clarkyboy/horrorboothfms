<?php

     include_once('db.php');
     include('dbcon.php');
     session_start();
     $username = $_GET['username'];
     function My_Alert($msg) {
        echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }
     if(isset($_SESSION['username'])){

        if($_SESSION['position'] === 'Admin'){header("Location: adminpanel.php");}
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

        <title>HORROR BOOTH MULTIPLATFORM SYSTEM</title>

        <!-- Bootstrap Core CSS -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Font Awesome CSS -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
		
		<!-- Custom CSS -->
        <link href="css/animate.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/styles.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>


        <!-- Template js -->
        <script src="js/jquery-2.1.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/contact_me.js"></script>
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/modernizr.custom.js"></script>
        <script src="js/script.js"></script>

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    
    <body>
        
        <!-- Start Logo Section -->
        <section id="logo-section" class="text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo text-center">
                            <h1>HORROR BOOTH</h1>
                            <span>Web Multi-system</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Logo Section -->
        
        
        <!-- Start Main Body Section -->
        <div class="mainbody-section text-center">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-3">
                        
                        <div class="menu-item blue">
                            <a href="#feature-modal" data-toggle="modal">
                                <i class="fa fa-magic"></i>
                                <p>Features</p>
                            </a>
                        </div>
                        
                        <div class="menu-item green">
                            <a href="#portfolio-modal" data-toggle="modal">
                                <i class="fa fa-user"></i>
                                <p>Member Login</p>
                            </a>
                        </div>
                        
                        <div class="menu-item light-red">
                            <a href="#about-modal" data-toggle="modal">
                                <i class="fa fa-mortar-board"></i>
                                <p>About Us</p>
                            </a>
                        </div>
                        
                    </div>
                    
                    <div class="col-md-6">
                        
                        <!-- Start Carousel Section -->
                        <div class="home-slider">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="padding-bottom: 30px;">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="images/about-03.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="images/about-02.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="images/about-01.jpg" class="img-responsive" alt="">
                                    </div>

                                </div>

                            </div>
                        </div>
                        <!-- Start Carousel Section -->
                        
                        <div class="row">
                        </div>
                        
                    </div>
                    
                    <div class="col-md-3">
                        
                        <div class="menu-item light-red">
                            <a href="#contact-modal" data-toggle="modal">
                                <i class="fa fa-envelope-o"></i>
                                <p>Contact</p>
                            </a>
                        </div>
                        
                        <div class="menu-item color">
                            <a href="#testimonial-modal" data-toggle="modal">
                                <i class="fa fa-comment-o"></i>
                                <p>Testimonial</p>
                            </a>
                        </div>
                        
                        <div class="menu-item light-orange responsive-2">
                            <a href="#team-modal" data-toggle="modal">
                                <i class="fa fa-users"></i>
                                <p>Team</p>
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Body Section -->
        
        <!-- Start Copyright Section -->
        <div class="copyright text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div>Design & Developed by <a href="https://www.facebook.com/smileeypin" target="_blank">Christian Barral</a> for <a href="http://graygrids.com">GrayGrids</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copyright Section -->
        
        
        <!-- Start Feature Section -->
        <div class="section-modal modal fade" id="feature-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>KK TISA Horror Booth Version 4.0</h3>
                            <p>Movie inspired stations</p>
                        </div>
                    </div>
                    <div class="row">
                         <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="images/stations/station1.gif" class="img-responsive" alt="">
                                <div class="portfolio-details text-center">
                                    <h4>Station 1</h4>
                                    <div class="designation">Get on board to stay alive</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="images/stations/station2.gif" class="img-responsive" alt="">
                                <div class="portfolio-details text-center">
                                    <h4>Station 2</h4>
                                    <div class="designation">Stay safe!</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="images/stations/station3.jpg" class="img-responsive" alt="">
                                <div class="portfolio-details text-center">
                                    <h4>Station 3</h4>
                                    <div class="designation">No one can escape her</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="images/stations/station4.gif" class="img-responsive" alt="">
                                <div class="portfolio-details text-center">
                                    <h4>Station 4</h4>
                                    <div class="designation">It started with an infection</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="images/stations/station5.gif" class="img-responsive" alt="">
                                <div class="portfolio-details text-center">
                                    <h4>Station 5</h4>
                                    <div class="designation">Come out come out wherever you are</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="images/stations/station6.gif" class="img-responsive" alt="">
                                <div class="portfolio-details text-center">
                                    <h4>Station 6</h4>
                                    <div class="designation">Cherish your last moments</div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.row -->
                </div>
                
            </div>
        </div>
        <!-- End Feature Section -->
        
        
        
        <!-- Start Portfolio Section -->
        <div class="section-modal modal fade" id="portfolio-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Register/Login</h3>
                            <p>Click on the image below to login or to register</p>
                        </div>
                    </div>
                    <div class="row">
                        
                       
                        
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="images/portfolio/4.png" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>Register</h4>
                                    <a href="register.php"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>

                         <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="images/portfolio/5.png" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>Admin Login</h4>
                                    <a href="admin_checkin.php"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="images/portfolio/6.png" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>Volunteer Login</h4>
                                    <a href="check_in.php"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                        
                                             
                    </div><!-- /.row -->
                </div>
                
            </div>
        </div>
        <!-- End Portfolio Section -->
        
        
        <!-- Start About Us Section -->
        <div class="section-modal modal fade" id="about-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>About Us</h3>
                            <p>Katipunan ng Kabataan Tisa</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="about-text">
                                <p>Katipunan ng Kabataan sa Tisa was revived by the Youth Board of 2013. It was consisted originally by its 30 members.

                                Now, KK sa Tisa has more or less 100 members in total, all active and alive, and powered by it’s current Youth Board and its Chairman of the Board, Ms Mary Sariel Alforque. This organization is a NON-PROFIT organization that envisions the Kabatan.onan sa Tisa as one.

                                It’s mission is to initiate activities that is for the common good of the Kabatan.onan sa Tisa.

                                This website is made for the purposes sharing of what is really happening in the Youth Sector of Barangay Tisa😀</p>
                            </div>
                        </div>
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="skill-shortcode">
                        
                                <!-- Progress Bar -->
                                <div class="skill">
                                    <p>Youth Lead Services</p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="60">
                                            <span class="progress-bar-span" >60%</span>
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>  
                                </div>

                                <!-- Progress Bar -->
                                <div class="skill">
                                    <p>Community Extension</p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="95">
                                            <span class="progress-bar-span" >95%</span>
                                            <span class="sr-only">95% Complete</span>
                                        </div>
                                    </div>  
                                </div>

                                <!-- Progress Bar -->
                                <div class="skill">
                                    <p>Leadership Services</p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="80">
                                            <span class="progress-bar-span" >80%</span>
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom-tab">
                        
                                <ul class="nav nav-tabs nav-justified" role="tablist">
                                    <li class="active"><a href="#tab-1" role="tab" data-toggle="tab">Our Mission</a></li>
                                    <li><a href="#tab-2" role="tab" data-toggle="tab">Our Vision</a></li>
                                    <li><a href="#tab-3" role="tab" data-toggle="tab">Organization History</a></li>
                                </ul>

                                <div class="tab-content">

                                    <div class="tab-pane active" id="tab-1">
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                                     </div>


                                    <div class="tab-pane" id="tab-2">
                                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                                    </div>


                                    <div class="tab-pane" id="tab-3">
                                        <p>Katipunan ng Kabataan sa Tisa was revived by the Youth Board of 2013. It was consisted originally by its 30 members.

                                Now, KK sa Tisa has more or less 100 members in total, all active and alive, and powered by it’s current Youth Board and its Chairman of the Board, Ms Mary Sariel Alforque. This organization is a NON-PROFIT organization that envisions the Kabatan.onan sa Tisa as one.

                                It’s mission is to initiate activities that is for the common good of the Kabatan.onan sa Tisa.

                                This website is made for the purposes sharing of what is really happening in the Youth Sector of Barangay Tisa </p>
                                    </div>

                                </div><!-- /.tab-content -->

                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- End About Us Section -->
        <!-- Start Team Member Section -->
        <div class="section-modal modal fade" id="team-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Katipunan ng Kabataan Tisa</h3>
                            <p>Officers and Volunteer-members</p>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="images/team/sayie.jpg" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>Mary Sariel Alforque</h4>
                                    <div class="designation">President</div>
                                    <ul style="text-align: center;">
                                        <li><a href="https://www.facebook.com/marysayie13"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="images/team/ken.jpg" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>Khennedy Gaviola</h4>
                                    <div class="designation">Vice President Internal</div>
                                    <ul style="text-align: center;">
                                        <li><a href="https://www.facebook.com/marysayie13"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="images/team/merian.jpg" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>Merian Yvonne Delos Reyes</h4>
                                    <div class="designation">Vice President External</div>
                                   <ul style="text-align: center;">
                                        <li><a href="https://www.facebook.com/marysayie13"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-5">
                            <div class="team-member">
                                <img src="images/team/jaja.jpg" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>Josua Emman Orellana</h4>
                                    <div class="designation">Treasurer</div>
                                    <ul style="text-align: center;">
                                        <li><a href="https://www.facebook.com/marysayie13"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-md-3 col-sm-5">
                            <div class="team-member">
                                <img src="images/team/lyra.jpg" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>Lyra Mia Moreno</h4>
                                    <div class="designation">Auditor</div>
                                   <ul style="text-align: center;">
                                        <li><a href="https://www.facebook.com/marysayie13"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-5">
                            <div class="team-member">
                                <img src="images/team/hannah.jpg" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>Hannah Nemil</h4>
                                    <div class="designation">Secretary</div>
                                    <ul style="text-align: center;">
                                        <li><a href="https://www.facebook.com/marysayie13"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="images/team/rotche.jpg" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>Maria Rotche Pedrosa</h4>
                                    <div class="designation">Asst. Secretary</div>
                                    <ul style="text-align: center;">
                                        <li><a href="https://www.facebook.com/marysayie13"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="images/team/april.jpg" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>Czarina April Villarino</h4>
                                    <div class="designation">PRO Internal</div>
                                    <ul style="text-align: center;">
                                        <li><a href="https://www.facebook.com/marysayie13"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="images/team/grace.jpg" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>Grace Abella</h4>
                                    <div class="designation">PRO External</div>
                                    <ul style="text-align: center;">
                                        <li><a href="https://www.facebook.com/marysayie13"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                           <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="images/team/zoshua.jpg" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>Juecshy Alisoso</h4>
                                    <div class="designation">Sports and Events Committee chairman</div>
                                    <ul style="text-align: center;">
                                        <li><a href="https://www.facebook.com/marysayie13"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                           <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="images/team/harris.jpg" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>Harris Vincent Nisnisan</h4>
                                    <div class="designation">Emergency Response Committee Chairman</div>
                                    <ul style="text-align: center;">
                                        <li><a href="https://www.facebook.com/marysayie13"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                          <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="images/team/angelle.jpg" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>Angelle Sanico</h4>
                                    <div class="designation">Academics Committee Chairman</div>
                                    <ul style="text-align: center;">
                                        <li><a href="https://www.facebook.com/marysayie13"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                         <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="images/team/julius.jpg" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>Julius Daclan</h4>
                                    <div class="designation">Ways and Means Committee Chairman</div>
                                    <ul style="text-align: center;">
                                        <li><a href="https://www.facebook.com/marysayie13"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                         <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="images/team/dessa.jpg" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>Dessa Taboada</h4>
                                    <div class="designation">Documentations and Communications Committee Chairman</div>
                                    <ul style="text-align: center;">
                                        <li><a href="https://www.facebook.com/marysayie13"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                         <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="images/team/harold.jpg" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>Harold Pacaña</h4>
                                    <div class="designation">SK Chairman</div>
                                    <ul style="text-align: center;">
                                        <li><a href="https://www.facebook.com/marysayie13"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                         <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="images/team/jai.jpg" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>Jaison Cho</h4>
                                    <div class="designation">Ex-Officio Adviser</div>
                                    <ul style="text-align: center;">
                                        <li><a href="https://www.facebook.com/marysayie13"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                         <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="images/team/barral.jpg" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>Christian Barral</h4>
                                    <div class="designation">Ex-Officio Adviser</div>
                                    <div class="designation">Senior Web Developer</div>
                                    <ul style="text-align: center;">
                                        <li><a href="https://www.facebook.com/marysayie13"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="team-member">
                                <img src="images/about-04.jpg" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>KK FAMILIA</h4>
                                    <div class="designation"></div>
                                    <ul style="text-align: center;">
                                        <li><a href="https://www.facebook.com/marysayie13"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                          <div class="col-md-4 col-sm-6">
                            <div class="team-member">
                                <img src="images/about-05.jpg" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>KK FAMILIA</h4>
                                    <div class="designation"></div>
                                    <ul style="text-align: center;">
                                        <li><a href="https://www.facebook.com/marysayie13"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="team-member">
                                <img src="images/about-06.jpg" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>KK FAMILIA</h4>
                                    <div class="designation"></div>
                                    <ul style="text-align: center;">
                                        <li><a href="https://www.facebook.com/marysayie13"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.row -->
                </div>
                
            </div>
        </div>
        <!-- End Team Member Section -->
        <!-- Start Contact Section -->
        <div class="section-modal modal fade contact" id="contact-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Contact With Us</h3>
                            <p>Katipunan ng Kabataan Tisa</p>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-4">
                            <div class="footer-contact-info">
                                <h4>Contact info</h4>
                                <ul>
                                    <li><strong>E-mail :</strong> christian.cebueastern@gmail.com</li>
                                    <li><strong>Phone :</strong> +032 261 8000</li>
                                    <li><strong>Mobile :</strong> +63932 430 0943</li>
                                    <li><strong>Web :</strong> kksatisa.wordpress.com</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="footer-social text-center">
                                <ul>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.facebook.com/KKTisa"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="footer-contact-info">
                                <h4>Working Hours</h4>
                                <ul>
                                    <li><strong>Mon-Sun :</strong> 9 am to 5 pm</li>
                                </ul>
                            </div>
                        </div>
                        
                    </div><!--/.row -->
                    <div class="row" style="padding-top: 80px;">
                        <div class="col-md-12">
                            <form name="sentMessage" id="contactForm" novalidate>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-lg-12 text-center">
                                        <div id="success"></div>
                                        <button type="submit" class="btn btn-primary">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- End Contact Section -->
        
        
         <!-- Start Testimonial Section -->
        <div class="section-modal modal fade contact" id="testimonial-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Straight from the Customers</h3>
                            <p>KK Horror Booth 2015 Testimonials</p>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-3 col-sm-6">
                            <div class="testimonial">
                                <img src="images/team/rosaly.jpg" class="img-responsive" alt="...">
                                <h4>Rosally Prajes</h4>
                                <div class="speech">
                                    <p>Ang horror booth sa tisa kai ayos jd kaau kai mora jd og tinood did2 jd qo nahadlok xa cge og pmira sa tiil og ka2ng ming~ingon nga ngano mi solod ka dre. daun tungod xa aqo kahadlok naa jd usa nila nga kauban nga aqo nawakli sa aqo kamot kai ming duol mn jd sya unya hadlok pd kaau og nawong</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-8">
                            <div class="testimonial">
                                <img src="images/team/chary.jpg" class="img-responsive" alt="...">
                                <h4>Chary Pasaylo Sangutan</h4>
                                <div class="speech">
                                    <p>Ang horror booth sa tisa kay makabuang,maka wagtang sa tingog, ug makalisang. didto jud ko nahadlok sa daghan kaayu ug elemento nya mga dagkong taw pa jud.. i dont know what to do .. and i almost cry nah jud that time coz nawala ang akong mga kauban, nya pag abot naku sa 2nd to the last room nakaana jud ko ug " sakto na dong kay dle na naku makaya ang kahadlok" katong niduol ang usa ka bata... wohhhhh the best experience ever.. after that nakagawas mi cge nami ug katawa.. thanks sa tanan nga nag organize ug sa mga makahahadlok na dagway... we enjoy it</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-6">
                            <div class="testimonial">
                                <img src="images/team/daisy.jpg" class="img-responsive" alt="...">
                                <h4>Daisy Mahinay</h4>
                                <div class="speech">
                                    <p>Ang horror booth sa Tisa kay nindot kaayo pagka make up nila nindut Kay sila mu hadlok Kay mu ingun sila ngano ni solod ka diri tapos tapos eh kurat. Me saakong amego katong partna and light nag turn off og on ?hadlok gyd kaayo Abe nako nga inig sulod nako DLI ko mahadlok Peru nahadlok gyd diay kohh O my god ??? Naka syagit gud ko ug I'm tired I don't,wanna do this bye guys thank you so much</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-6">
                            <div class="testimonial">
                                <img src="images/team/johnpaul.jpg" class="img-responsive" alt="...">
                                <h4>Johnpaul Abella</h4>
                                <div class="speech">
                                    <p>Ang horror booth sa tisa kay nindot kaayo pag ka make up nila nindot kay sila mo handlok kay mu ingon sila ngano ni solod ka dre tapos eh kurat mi sa akong amigo katong part na ang light kay nag turn off og on.</p>
                                </div>
                            </div>
                        </div>
                        
                    </div><!--/.row -->
                    
                </div>
                
            </div>
        </div>
        <!-- End Testimonial Section -->
        
    </body>
    
</html>