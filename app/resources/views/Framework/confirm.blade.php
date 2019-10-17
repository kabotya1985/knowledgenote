<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>フレームワーク内容/framework/detail</title>
    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/fonts/fontawesome/css/all.css">
    <link rel="stylesheet" href="/assets/flag-icon/flag-icon.min.css">
    <link rel="stylesheet" type="/text/css" href="/assets/css/slick.css" />
    <link rel="stylesheet" type="/text/css" href="/assets/css/slick-theme.css" />
    <link rel="stylesheet" type="/text/css" href="/assets/select2/select2.min.css">
    <link rel="stylesheet" type="/text/css" href="/assets/raty-js/lib/jquery.raty.css">
    <link rel="stylesheet" type="/text/css" href="/assets/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="/assets/css/theme-style.css">
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div class="main-wrapper">
        <!-- header start -->
        <div class="header-classic">
            <!-- navigation start -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <nav class="navbar navbar-expand-lg navbar-classic">
                            <a class="navbar-brand" href="/index"> <img src="/assets/images/logo.png" alt=""></a>
                            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-classic" aria-controls="navbar-classic" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar top-bar mt-0"></span>
                                <span class="icon-bar middle-bar"></span>
                                <span class="icon-bar bottom-bar"></span>
                            </button>
                            
                            <div class="collapse navbar-collapse" id="navbar-classic">
                                <ul class="navbar-nav ml-auto mt-2 mt-lg-0 mr-3">

                                    <li>
                                    <a class="nav-link" href="/index">Homepage</a>       
                                    </li>

                                    <li>
                                    <a class="nav-link" href="/framework/form">framework作成</a>       
                                    </li>

                                    <li>
                                    <a class="nav-link" href="/member">member</a>       
                                    </li>

                                </ul>

                                <div class="header-btn d-xl-block d-lg-none">
                                    <a href="login-page.html" class="btn btn-outline-primary" data-toggle="modal" data-target="#loginmodal">
                                        Login
                                    </a>
                                </div>

                            </div>
                        </nav>
                    </div>
                </div>
            </div>   
            <!-- navigation close -->
        </div>
        <!-- header close -->
        <!-- listing slider start -->

                        <!-- listing badges start -->
                        <div class="listing-badges">
                            <div class="badge badge-success badge-pill"><i class="fas fa-award mr-2"></i>Verified Space</div>
                            <div class="like-button">
                                <div class="like-icon"></div>
                            </div>
                        </div>
                        <!-- listing badges close -->
                    </div>
                </div>
            </div>
        </div>
        <!-- listing slider close -->
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <!-- listing nav start -->
                   
                    <!-- listing nav close -->
                </div>
            </div>
        </div>
        <div class="listing-detail-section">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-12 col-12">
                        <div class="listing-detail-header" id="overview">
                            <!-- listing detail head start -->

                            <div class="listing-detail-head">
                                <h2 class="listing-detail-head-title">

                               
                            </div>

                            <div class="listing-detail-body">
                                <div class="row no-gutters">
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 border-right">
                                        <div class="listing-detail-body-meta">
                                            <div class="meta-icon"> <i class="fas fa-calendar-alt"></i></div>
                                                <h4 class="meta-lable">
                                         
                                                </h4>
                                            <span class="meta-value">Minimum term</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 border-right">
                                        <div class="listing-detail-body-meta">
                                            <div class="meta-icon"> <i class="fas fa-vector-square"></i></div>
                                            <h4 class="meta-lable">180 SqFt</h4>
                                            <span class="meta-value">Size</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 border-right">
                                        <div class="listing-detail-body-meta">
                                            <div class="meta-icon"> <i class="fas fa-users"></i></div>
                                            <h4 class="meta-lable">10</h4>
                                            <span class="meta-value">People</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                                        <div class="listing-detail-body-meta">
                                            <div class="meta-icon"> <i class="fas fa-chair"></i></div>
                                            <h4 class="meta-lable">Office Spaces</h4>
                                            <span class="meta-value">Space Type</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- listing detail head close -->
                        </div>
                        <!-- listing detail start -->
                        <div class="listing-detail-card" id="about">

                        <form action="{{ url('/framework/done')}}", method="post">
                          @csrf
                          <input type='hidden' name='id' value="{{ $data['id']}}">
                          <input type='hidden' name='framework' value="{{ $param['framework']}}">
                          <input type='hidden' name='description' value="{{ $param['description']}}">
     
                          <p>投稿フレームワーク</p>
                          <p>{{ $param['framework'] }}</p>

                          <p>投稿内容</p>
                          <p>{{ $param['description'] }}</a>

                          <input type="submit" name="confirm" , class="fas"  value="投稿">
                        </form>

                        </div>
                        <!-- listing detail close -->
                        <!-- listing detail start -->
                      
                        <!-- listing detail close -->
                        <!-- listing detail start -->
                        <div class="listing-detail-card video" id="video">
                            <h4 class="listing-detail-card-title">picture</picture></h4>
                            <div class="video-testimonial-block">
                                <div class="video-thumbnail"><img src="/assets/images/video-play-img.jpg" alt="" class="img-fluid"></div>
                                <div class="video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/watch?v=-PViKTC9WLY" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <a href="" class="video-play"></a>
                            </div>
                        </div>
                        <!-- listing detail close -->

                        <!-- listing detail start -->

                        </div>
                        <!-- listing detail close -->

                        <!-- listing detail start -->
                      
                        <!-- listing detail close -->
                        <!-- listing detail start -->
                        
                        <!-- listing detail close -->
                        <!-- listing detail start -->
                     
                        <!-- listing detail close -->
               
                        <!-- listing detail start -->
 
                            <!-- listing widget start -->
                 
                            <!-- listing widget close -->
                            <!-- listing widget start -->
                            <div class="listing-sidebar-widget">
                     
                                </div>
                            </div>
                            <!-- listing widget close -->
                            <!-- listing widget start -->
                            <div class="listing-sidebar-widget">
                                <h3 class="listing-widget-title">owner</h3>
                                <div class="listing-sidebar-widget-content">
                                    <div class="contact-details">
                                        <div class="profile-img"><img src="/assets/images/avatar-2.jpg" alt=""></div>
                                        <h4 class="profile-name">Joanne Mitchell</h4>
                                    </div>
                                    <a href="JavaScript:void(0);" class="btn btn-outline-primary btn-block">
                                        <span data-replace="555-555-1212">555-XX-XXXX</span></a>
                                </div>
                            </div>
                            <!-- listing widget close -->
                            <!-- listing widget start -->
                            <div class="listing-sidebar-widget">
                                <div class="listing-sidebar-widget-content">
                                    <div class="social-media">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- listing widget close -->
                            <!-- listing siebar form -->
                         
                            <!-- listing siebar form -->
                        
                        <!-- listing detail close -->
                 
                            <!-- listing block close -->
                        
                            <!-- listing block start -->
                           
                            <!-- listing block close -->
                        
                            <!-- listing block start -->
                            
                            <!-- listing block close -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer section start -->
        <div class="footer-dark">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                        <!-- footer widget  -->
                        
                    <!-- footer widget  -->
                    <div class="footer-widget">
                            <div class="brand-logo"><img src="/text/images/primary-white-logo.png" alt=""></div>
                            <p class="footer-widget-text">詳細</p>
                            <div class="footer-location">
                                <p class="phone-numbers">000-0000-0000</p>
                                <p class="mail">tosi1985@gmail.com</p>
                            </div>
                            <div class="social-media">
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-twitter-square"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-pinterest-square"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- footer widget  -->
                 
                    <!-- footer widget  -->
                   
                        <!-- footer widget  -->
                    </div>
                </div>
            </div>
            <!-- tiny footer  -->
            <div class="tiny-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="tiny-footer-text">Copyright © 2020 Spacely Companies Inc. All rights reserved</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="tiny-footer-links">
                                <ul>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">Cookies</a></li>
                                    <li><a href="#">FAQ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer section close  -->
        </div>
        <!-- footer section close -->
    </div>
    <!-- Button trigger modal -->
    <!-- Modal -->
    <div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="loginmodalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- login form start -->
                    <div class="login-form border-0">
                        <div class="login-form-body">
                            <h4 class="login-form-title">Login</h4>
                            <form>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="example@gmail.com" required="">
                                </div>
                                <div class="form-group">
                                    <label id="password">Password</label>
                                    <input id="password-field" type="password" class="form-control" name="password" value="" placeholder="*************">
                                    <span toggle="#password-field" class="fa fa-fw fa-eye password-hide-icon showhidepassword"></span>
                                    <small>Must be 8-20 characters long.</small>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                            </form>
                            <div class="login-remember-password-block">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="rememberme">
                                    <label class="custom-control-label" for="rememberme">Remember Me</label>
                                </div>
                                <div class="forgot-password-link">
                                    <a href="forget-password-page.html"> Forgot Password?</a>
                                </div>
                            </div>
                        </div>
                        <div class="login-form-footer">
                            <p class="login-form-footer-text">Don’t have a Spacely account? <a href="register-page.html">Create Account</a> and we’ll set you up so you can list your space.</p>
                        </div>
                    </div>
                    <!-- login form close -->
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <script src="/assets/js/jquery-3.3.1.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/main-js.js"></script>
    <script src="/assets/js/slick.min.js"></script>
    <script src="/assets/js/jquery.easing.min.js"></script>
    <script src="/assets/js/scrolling-nav.js"></script>
    <script src="/assets/select2/select2.full.min.js"></script>
    <script src="/assets/select2/select2.min.js"></script>
    <script src="/assets/raty-js/lib/jquery.raty.js"></script>
    <script src="/assets/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="/assets/js/listing-map.js"> </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvZiQwPXkkIeXfAn-Cki9RZBj69mg-95M&callback=initialize">
    </script>
</body>

</html>
