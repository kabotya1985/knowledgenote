<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="世界にちらばるフレームワークをもっと使いやすく.">
    <title>Homepage/index</title>
    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css" />
    <link rel="stylesheet" href="assets/flag-icon/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/theme-style.css">
    <link rel="stylesheet" type="text/css" href="assets/select2/select2.min.css">
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

                                
                                    <a class="nav-link" href="/signin/form">
                                        signin
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

        <div class="container-fluid">
                <!-- hero section start  -->
            <div class="hero-slider-section">
                <div class="row">
                    <div class="col-xl-12">
                    <div class="hero-search-area-caption">
                                <h1 class="hero-search-area-caption-title">frameworkを探す</h1>
                            </div>

                                    <form class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" action="{{ url('/search')}}", method="get">
                                        @csrf
                                        {{ csrf_field() }} 
                                        
                                         <input name="keyword" type="text" placeholder="framework" class="form-mcontrol " value= "{{ $keyword ?? '' }}">
                                         <input name="searchbutton" type="submit" class="btn btn-primary btn-lg" value="検索" >
                                   
                                    </form>
                                        
                                    </div>
                                </form>
                            </div>
                            
                    </div>
                </div>
                <!-- hero serach area start  -->
                <div class="hero-search-area">
                    <div class="row">
                        <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">

                            
                        </div>
                    </div>
                </div>
                  <!-- hero serach area close  -->
            </div>
        </div>
        
        <div class="space-lg space-md space-xs">
            <div class="container-fluid">
                <div class="row">
                      <!-- section heading start  -->
            
                       <!-- section heading close  -->
               
                           <!-- space showcase start  -->
                       
                        <!-- space showcase close  -->
                  
                    <!-- space showcase start  -->
                   
                    <!-- space showcase close  -->
                    <!-- space showcase start  -->
                    
                    <!-- space showcase close  -->
                    <!-- space showcase start  -->
                    
                    <!-- space showcase close  -->
                    <!-- space showcase start  -->
                   
                    <!-- space showcase close  -->
                    <!-- space showcase start  -->
                   
                    <!-- space showcase close  -->
                </div>
            </div>
        </div>

        <div class="space-lg space-md space-xs pt-4">
            <div class="container">
                <div class="row">
                    <!-- section heading start  -->
                    
                    <!-- section heading close  -->
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <!-- listing block start  -->
                        <div class="listing-block">
                            <div class="listing-img">
                                <a href="listing-single.html"> <img src="/text/images/listing-img-1.jpg" alt="" class="img-fluid"></a>
                                <div class="listing-badge">Featured</div>
                                <a href="listing-single.html" class="listing-category-badge badge-light-brose">
                                    Office Space
                                </a>
                                <div class="like-icon"></div>
                            </div>
                            <div class="listing-content">
                                <div class="listing-content-head">
                                    <h3 class="listing-content-head-title"> <a href="listing-single.html">Heading for Office Space Title</a></h3>
                                    <p class="listing-content-head-text">Ahmedabad, Gujarat, India</p>
                                </div>
                                <div class="review-content-rating">
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star empty"></span>
                                    <a href="listing-single.html" class="rating-review">4.0</a>
                                </div>
                                <div class="listing-content-meta">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                            <span class="lable">Monthly</span> <br> <span class="value">$2250</span>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                            <span class="lable">People</span> <br> <span class="value">12</span>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                            <span class="lable">Sq.Ft</span> <br> <span class="value">1200</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                          <!-- listing block close  -->
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                          <!-- listing block start  -->
                        <div class="listing-block">
                            <div class="listing-img">
                                <a href="listing-single.html"> <img src="/text/images/listing-img-2.jpg" alt="" class="img-fluid"></a>
                                <a href="listing-single.html" class="listing-category-badge badge-light-orange">
                                    Meeting Space
                                </a>
                                <div class="like-icon"></div>
                            </div>
                            <div class="listing-content">
                                <div class="listing-content-head">
                                    <h3 class="listing-content-head-title"> <a href="listing-single.html">Meeting Office Space Title</a></h3>
                                    <p class="listing-content-head-text">Surat, Gujarat, India</p>
                                </div>
                                <div class="review-content-rating">
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star empty"></span>
                                    <span class="star empty"></span>
                                    <a href="listing-single.html" class="rating-review">5.0</a>
                                </div>
                                <div class="listing-content-meta">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                            <span class="lable">Hourly</span> <br> <span class="value">$50</span>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                            <span class="lable">People</span> <br> <span class="value">3</span>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                            <span class="lable">Sq.Ft</span> <br> <span class="value">360</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <!-- listing block close  -->
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                         <!-- listing block start  -->
                        <div class="listing-block">
                            <div class="listing-img">
                                <a href="listing-single.html"> <img src="/text/images/listing-img-3.jpg" alt="" class="img-fluid"></a>
                                <a href="listing-single.html" class="listing-category-badge badge-light-purple">
                                    Coworking Space
                                </a>
                                <div class="like-icon"></div>
                            </div>
                            <div class="listing-content">
                                <div class="listing-content-head">
                                    <h3 class="listing-content-head-title"> <a href="listing-single.html">Coworking Office Space Title</a></h3>
                                    <p class="listing-content-head-text">Vadodara, Gujarat, India</p>
                                </div>
                                <div class="review-content-rating">
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star half"></span>
                                    <span class="star empty"></span>
                                    <a href="listing-single.html" class="rating-review">4.5</a>
                                </div>
                                <div class="listing-content-meta">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                            <span class="lable">Weekly</span> <br> <span class="value">$250</span>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                            <span class="lable">People</span> <br> <span class="value">24</span>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                            <span class="lable">Sq.Ft</span> <br> <span class="value">2200</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <!-- listing block close  -->
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center mt-3">
                        <a href="listing-categories.html" class="btn btn-outline-primary">Browse all space</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-lg space-md space-xs bg-light rounded">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                         <!-- section heading start  -->
                        <div class="section-heading text-center">
                            <h2 class="section-heading-title">Knowledgebook</h2>
                            <p class="section-heading-text lead"></p>
                        </div>
                           <!-- section heading close  -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                           <!-- process block start  -->
                      
                           <!-- process block close  -->
                    
                    
                           <!-- process block start  -->
           
                           <!-- process block close  -->
         
                           <!-- process block start  -->
                    
                           <!-- process block close  -->
                    </div>
                  
                </div>
            </div>
        </div>

        <div class="space-lg space-md space-xs">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 text-center mb-5 ">
                           <!-- section heading start  -->
                        <div class="section-heading">

                        </div>
                          <!-- section heading close  -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                          <!-- client logo start  -->
                        <div class="client-logo">
                            <img src="/text/images/logo-buffer.png" alt="" class="img-fluid">
                        </div>
                        <!-- client logo close  -->
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                        <!-- client logo start  -->
                        <div class="client-logo">
                            <img src="/text/images/logo-buzzumo.png" alt="" class="img-fluid">
                        </div>
                        <!-- client logo close  -->
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                        <!-- client logo start  -->
                        <div class="client-logo">
                            <img src="/text/images/logo-clearbit.png" alt="" class="img-fluid">
                        </div>
                        <!-- client logo close  -->
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                        <!-- client logo start  -->
                        <div class="client-logo">
                            <img src="/text/images/logo-converkit.png" alt="" class="img-fluid">
                        </div>
                        <!-- client logo close  -->
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                        <!-- client logo start  -->
                        <div class="client-logo">
                            <img src="/text/images/logo-envato.png" alt="" class="img-fluid">
                        </div>
                        <!-- client logo close  -->
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                        <!-- client logo start  -->
                        <div class="client-logo">
                            <img src="/text/images/logo-frame.png" alt="" class="img-fluid">
                        </div>
                        <!-- client logo close  -->
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
    <script src="/assets/select2/select2.full.min.js"></script>
    <script src="/assets/select2/select2.min.js"></script>
    <script src="/assets/js/slick.min.js"></script>
</body>

</html>
