<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>
        <!-- Bootstrap -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- FontAwesome -->
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        <!-- Animate -->
        <link href="assets/css/animate.css" rel="stylesheet">
        <!-- Owl Slider -->
        <link href="assets/css/owl.carousel.css" rel="stylesheet">
        <!-- Owl Slider Theme -->
        <link href="assets/css/owl.theme.css" rel="stylesheet">
        <!--Jquery Validation -->
        <link href="assets/css/validationEngine.jquery.css" rel="stylesheet">
        <!--Jquery custom Validation -->
        <link href="assets/css/custom_validatiion.css" rel="stylesheet">
        <!-- style.css -->
        <link href="assets/css/style.css" rel="stylesheet">
        <!-- custom Css Lins -->
        <link href="assets/css/custom.css" rel="stylesheet">
        <!-- Responsive -->
        <link href="assets/css/responsive.css" rel="stylesheet">

    </head>
    <body ng-app="myApp">
        <!-- page header -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-default" role="navigation">
                            <div class="navbar-header">
                                 
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                     <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                                </button> <a class="navbar-brand" href="#">LOGO HERE</a>
                            </div>
                            
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                              
                                <ul class="nav navbar-nav navbar-right">
                                    <li>
                                        <a href="#/!">HOME</a>
                                    </li>
                                    <li>
                                        <a href="#!aboutus">ABOUT US</a>
                                    </li>
                                    <li>
                                        <a href="#!services">SERVICES</a>
                                    </li>
                                    <li>
                                        <a href="#!user">FORM</a>
                                    </li>
                                    <li>
                                        <a href="#!contact">CONTACT US</a>
                                    </li>
                                    <li>
                                        <a href="#!registration" class="btn registartion">REGISTRATION</a>
                                    </li>
                                     <li>
                                        <a href="#!signin" class="btn signin">SIGN IN</a>
                                    </li>
                                    
                                </ul>
                            </div>
                            
                        </nav>
                    </div>
                </div>
            </div>
            <div class="carousel slide" id="carousel-966660">
                <ol class="carousel-indicators">
                    <li class="active" data-slide-to="0" data-target="#carousel-966660">
                    </li>
                    <li class="active bg_color" data-slide-to="1" data-target="#carousel-966660">
                    </li>
                    <li class="active" data-slide-to="2" data-target="#carousel-966660">
                    </li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                         <img src="assets/images/banner.png">
                        <div class="carousel-caption">
                            <h4 class="banner_heading">
                               PRINTING MADE EASY
                            </h4>
                           <div class="button_banner"><button type="button" class="btn">CONTACT US</button></div>
                        </div>
                    </div>
                    <div class="item">
                         <img src="assets/images/banner.png" alt="banner" class="img-responsive">
                        <div class="carousel-caption">
                            <h4 class="banner_heading">
                               PRINTING MADE EASY
                            </h4>
                           <div class="button_banner"><button type="button" class="btn">CONTACT US</button></div>
                        </div>
                    </div>
                    <div class="item">
                       <img src="assets/images/banner.png" alt="banner" class="img-responsive">
                        <div class="carousel-caption">
                            <h4 class="banner_heading">
                                PRINTING MADE EASY
                            </h4>
                           <div class="button_banner"><button type="button" class="btn">CONTACT US</button></div>
                        </div>
                    </div>
                </div> <a class="left carousel-control" href="#carousel-966660" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-966660" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </header>


        <div ng-view></div>

        <!-- footer section -->
        <footer>
            <div class="container-fluid bg_color">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="footer_heading">
                                Like us on:<i class="fa fa-facebook" aria-hidden="true"></i>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid bg_color_last">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="footer_heading_last">
                                All rights Reserved © 2017 <a href="#"><span>Hyraskrivare</span></a> Designed & Developed by <a href="#"><span>Startupbug.net</span></a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="assets/js/jquery-3.1.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <!-- Bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Carousel-min -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- Wow-min-js -->
        <script src="assets/js/wow.min.js"></script>
        <!-- masonry-grid-js -->
        <script src="assets/js/masonry.pkgd.min.js"></script>
        <!-- alertify-js -->
        <script src="assets/js/alertify.min.js"></script>
        <!-- juqeyr custom validatoin plugin-js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
        <!-- custom validatoin-js -->
        <script src="assets/js/custom_validatiion.js"></script>
        <!-- script-js -->
        <script src="assets/js/script.js"></script>
        <!-- Custom-js -->
        <script src="assets/js/custom.js"></script>


        <script src="assets/angularjs/1.6.4/angular.min.js"></script>
        <script src="assets/angularjs/1.6.4/angular-route.js"></script>
        <!-- Angular Custom-js -->
        <script src="assets/angularjs/custom.js"></script>

    </body>
</html>