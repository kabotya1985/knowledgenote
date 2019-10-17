<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Lisitng Categories layout template for realestate">
    <title>検索結果/search</title>
    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/fonts/fontawesome/css/all.css">
    <link rel="stylesheet" href="/assets/flag-icon/flag-icon.min.css">
    <link rel="stylesheet" href="/assets/css/theme-style.css">
    <link rel="stylesheet" type="text/css" href="/assets/select2/select2.min.css">
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
        <!-- header close -->
        <!-- pageheader start  -->
  
        <!-- pageheader close  -->
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12">
                    <!-- breadcrumb start  -->
                    <div class="custom-breadcrumb">
                        <nav aria-label="breadcrumb">

                        </nav>
                    </div>
                    <!-- breadcrumb close  -->
                </div>
            </div>
        </div>
        <div class="space-lg space-md space-xs">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <!-- listing block start -->
                        <div class="listing-block">

                            <div class="listing-img">
                                <a href="#"> <img src="/assets/images/listing-img-1.jpg" alt="" class="img-fluid"></a>
                                <div class="listing-badge">注目</div>
                                <a href="#" class="listing-category-badge badge-light-brose">
                                    @foreach ($query  as $list )                                  
                                    {{ $list->genre }}                                            
                                    @endforeach   
                                </a>
                                <div class="like-icon"></div>
                            </div>

                            <div class="listing-content">
                                <div class="listing-content-head">
                                    <h3 class="listing-content-head-title">                                     
                                    @foreach ($query  as $list )
                                    <a href="/framework/detail?id={{ $list->id}}">
                                    {{ $list->name }}          
                                    </a>
                                    @endforeach                               
                                    </h3>  
                                </div>

                                <div class="review-content-rating">
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star empty"></span>
                                    <a href="#" class="rating-review">4.0</a>
                                </div>

                                <div class="listing-content-meta">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                            <span class="lable">
                                            @foreach ($query  as $list )
                                        
                                            
                                            @endforeach  

                                            </span> 
                                        </div>
                                     
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- listing block close -->
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <!-- listing block start -->
                      
                        <!-- listing block close -->
               
                        <!-- listing block start -->
                      
                        <!-- listing block close -->
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
</body>

</html>
