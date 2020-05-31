<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Financial Notebook</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Fonts -->

        <!-- Styles -->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="css/mdbCSS/bootstrap.min.css">
        <!-- Material Design Bootstrap -->
        <link rel="stylesheet" href="css/mdbCSS/mdb.min.css">
        <link href="css/styles.css" rel="stylesheet" />
        <!-- Styles -->
    </head>
    <body>
        <div class="">

            <div class="content">
              <!-- Navigation-->
                <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
                    <div class="container">
                        <a class="navbar-brand js-scroll-trigger" href="{{ url('/') }}">Financial Notebook</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                            <ul class="navbar-nav ml-auto my-2 my-lg-0">
                                @if (Route::has('login'))
                                    @auth
                                        <li class="nav-item"><a class="nav-link" href="{{ url('/account') }}"> {{ Auth::user()->firstname }}</a></li>
                                    @else
                                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                                        @if (Route::has('register'))
                                            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                                        @endif
                                    @endauth
                                @endif
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Masthead-->
                <header class="masthead">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center justify-content-center text-center">
                            <div class="col-lg-10 align-self-end">
                                <h1 class="text-uppercase text-white font-weight-bold">Financial Notebook the best way to keep track of your money </h1>
                                <hr class="divider light my-4" />
                            </div>
                            <div class="col-lg-8 align-self-baseline">
                                <p class="text-white-75 font-weight-light mb-5">Financial Notebook gets your monthly income and records your daily, weekly and monthly expenses to help you manage your money wisely.</p>
                                <a class="btn btn-success btn-xl js-scroll-trigger" href="#about">Start Now!</a>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- About-->
                <section class="page-section bg-success" id="about">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 text-center wow animated slideInLeft">
                                <h2 class="text-white mt-0">All in one place!</h2>
                                <hr class="divider light my-4" />
                                <p class="text-white-50 mb-4">Managing your expenses has never been so easy before! Just simply input your sources of income and expenses and in an instant, you can find where you must manage your money well!</p>
                                <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Services-->
                <section class="page-section" id="services">
                    <div class="container">
                        <h2 class="text-center mt-0 wow animated fadeIn">The Application</h2>
                        <hr class="divider green my-4 wow animated fadeIn" />
                        <div class="row">
                            <div class="col-lg-3 col-md-6 text-center wow animated slideInLeft">
                                <div class="mt-5 ">
                                    <i class="far fa-4x fa-calendar-check text-success mb-4"></i>
                                    <h3 class="h4 mb-2">Monthy Reports</h3>
                                    <p class="text-muted mb-0">Get notified with your monthly savings and expenses!</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 text-center wow animated slideInLeft">
                                <div class="mt-5 ">
                                    <i class="fas fa-4x fa-list text-success mb-4"></i>
                                    <h3 class="h4 mb-2">Category Management</h3>
                                    <p class="text-muted mb-0">Manage your source of income and expenses!</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 text-center wow animated slideInRight">
                                <div class="mt-5 ">
                                    <i class="fas fa-4x fa-pen text-success mb-4"></i>
                                    <h3 class="h4 mb-2">Ledger Tracking</h3>
                                    <p class="text-muted mb-0">View your list of expenses or Create one to record!</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 text-center wow animated slideInRight">
                                <div class="mt-5 ">
                                    <i class="far fa-4x fa-thumbs-up text-success mb-4"></i>
                                    <h3 class="h4 mb-2">Efficient</h3>
                                    <p class="text-muted mb-0">Makes money budgeting a lot easier!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Portfolio-->
                <div id="portfolio">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                            <div class="col-lg-4 col-sm-6">
                                <a class="portfolio-box" href="assets/img/portfolio/fullsize/1.jpg"
                                    ><img class="img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="" />
                                    <div class="portfolio-box-caption">
                                        <div class="project-category text-white-50">Category</div>
                                        <div class="project-name">Project Name</div>
                                    </div></a
                                >
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <a class="portfolio-box" href="assets/img/portfolio/fullsize/2.jpg"
                                    ><img class="img-fluid" src="assets/img/portfolio/thumbnails/2.jpg" alt="" />
                                    <div class="portfolio-box-caption">
                                        <div class="project-category text-white-50">Category</div>
                                        <div class="project-name">Project Name</div>
                                    </div></a
                                >
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <a class="portfolio-box" href="assets/img/portfolio/fullsize/3.jpg"
                                    ><img class="img-fluid" src="assets/img/portfolio/thumbnails/3.jpg" alt="" />
                                    <div class="portfolio-box-caption">
                                        <div class="project-category text-white-50">Category</div>
                                        <div class="project-name">Project Name</div>
                                    </div></a
                                >
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <a class="portfolio-box" href="assets/img/portfolio/fullsize/4.jpg"
                                    ><img class="img-fluid" src="assets/img/portfolio/thumbnails/4.jpg" alt="" />
                                    <div class="portfolio-box-caption">
                                        <div class="project-category text-white-50">Category</div>
                                        <div class="project-name">Project Name</div>
                                    </div></a
                                >
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <a class="portfolio-box" href="assets/img/portfolio/fullsize/5.jpg"
                                    ><img class="img-fluid" src="assets/img/portfolio/thumbnails/5.jpg" alt="" />
                                    <div class="portfolio-box-caption">
                                        <div class="project-category text-white-50">Category</div>
                                        <div class="project-name">Project Name</div>
                                    </div></a
                                >
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <a class="portfolio-box" href="assets/img/portfolio/fullsize/6.jpg"
                                    ><img class="img-fluid" src="assets/img/portfolio/thumbnails/6.jpg" alt="" />
                                    <div class="portfolio-box-caption p-3">
                                        <div class="project-category text-white-50">Category</div>
                                        <div class="project-name">Project Name</div>
                                    </div></a
                                >
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Contact-->
                <section class="page-section" id="contact">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 text-center">
                                <h2 class="mt-0">Let's Get In Touch!</h2>
                                <hr class="divider my-4" />
                                <p class="text-muted mb-5">Ready to start your next project with us? Give us a call or send us an email and we will get back to you as soon as possible!</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                                <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                                <div>+1 (555) 123-4567</div>
                            </div>
                            <div class="col-lg-4 mr-auto text-center">
                                <i class="fas fa-envelope fa-3x mb-3 text-muted"></i
                                ><!-- Make sure to change the email address in BOTH the anchor text and the link target below!--><a class="d-block" href="mailto:contact@yourwebsite.com">contact@yourwebsite.com</a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Footer-->
                <footer class="bg-light py-5">
                    <div class="container"><div class="small text-center text-muted">Copyright © 2020 - Start Bootstrap</div></div>
                </footer>  
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <!-- jQuery -->
        <script type="text/javascript" src="js/mdbJS/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="js/mdbJS/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="js/mdbJS/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/mdbJS/mdb.min.js"></script>
        <script src="js/scripts.js"></script>
        <script>
            $( document ).ready(function() {
                new WOW().init();
            });
        </script>
    </body>
</html>
