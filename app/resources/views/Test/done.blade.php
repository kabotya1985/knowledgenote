<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Add a space">
    <title>ナレッジ投稿完了/framework/form</title>
    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/fonts/fontawesome/css/all.css">
    <link rel="stylesheet" href="/assets/flag-icon/flag-icon.min.css">
    <link rel="stylesheet" type="/text/css" href="/assets/select2/select2.min.css">
    <link rel="stylesheet" type="/text/css" href="/assets/dropzone/dropzone.min.css">
    <link rel="stylesheet" href="/assets/css/theme-style.css">
</head>
<body class="bg-light">
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div class="db-wrapper">
        <div class="db-header">
            <!-- header start -->
            <!-- navigation start -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <nav class="navbar navbar-expand-lg db-navbar">
                            <div class="db-navbar-brand"><a class="navbar-brand" href="index.html"> <img src="/assets/images/db-logo.png" alt=""></a></div>
                            <div class="db-navbar-toggler"><button class="db-sidenav-toggler navbar-toggler collapsed" type="button" data-toggle="offcanvas" data-target="#db-sidenav" aria-controls="db-sidenav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar top-bar mt-0"></span>
                                    <span class="icon-bar middle-bar"></span>
                                    <span class="icon-bar bottom-bar"></span>
                                </button>
                                <button class=" db-header-toggler navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#db-navbar" aria-controls="db-navbar" aria-expanded="false" aria-label="Toggle navigation">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse" id="db-navbar">
                                <ul class="navbar-nav ml-auto mt-2 mt-lg-0 mr-3">
                                    <li class="nav-item dropdown dropleft notification">
                                        <a class="nav-link dropdown-toggle" href="#" id="menu-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-bell bell-icon"></i>
                                            <span class="badge badge-primary">23</span>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="menu-1">
                                            <span class="with-arrow"><span class=""></span></span>
                                            <div class="notification-list">
                                                <li class="dropdown-item">
                                                    <a href="#">
                                                        <p class="dropdown-item-text">You have got a new request quote for your office.</p>
                                                        <p class="dropdown-item-time">1 days ago</p>
                                                    </a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="#">
                                                        <p class="dropdown-item-text">Welcome to Spacely! Click here it understand better.</p>
                                                        <p class="dropdown-item-time">23 days ago</p>
                                                    </a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="#">
                                                        <p class="dropdown-item-text">You have got a new request quote for your office.</p>
                                                        <p class="dropdown-item-time">1 days ago</p>
                                                    </a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="#">
                                                        <p class="dropdown-item-text">Welcome to Spacely! Click here it understand better.</p>
                                                        <p class="dropdown-item-time">23 days ago</p>
                                                    </a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="#">
                                                        <p class="dropdown-item-text">You have got a new request quote for your office.</p>
                                                        <p class="dropdown-item-time">1 days ago</p>
                                                    </a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="#">
                                                        <p class="dropdown-item-text">Welcome to Spacely! Click here it understand better.</p>
                                                        <p class="dropdown-item-time">23 days ago</p>
                                                    </a>
                                                </li>
                                            </div>
                                            <div class="notification-footer">
                                                <a href="#" class="notification-footer-show">Show all</a>
                                                <a href="#" class="notification-footer-mark"> Mark all as read</a>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown dropleft user">
                                        <a class="nav-link dropdown-toggle" href="#" id="menu-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="/assets/images/avatar-1.jpg" alt="" class="rounded-circle user-profile">
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="menu-2">
                                            <span class="with-arrow"><span class=""></span></span>
                                            <li class="dropdown-item">
                                                <a class="dropdown-link" href="dashboard-overview.html"><i class="fas fa-fw fa-tachometer-alt"></i>Dashboard</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a class="dropdown-link" href="dashboard-listing.html"><i class="fas fa-fw fa-list"></i>Listing</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a class="dropdown-link" href="dashboard-request-quote.html"><i class="fas fa-fw fa-receipt"></i>Request Quote</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a class="dropdown-link active" href="dashboard-listing-reviews.html"><i class="fas fa-fw fa-star"></i>Reviews</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a class="dropdown-link" href="dashboard-invoice.html"><i class="fas fa-fw fa-file-invoice"></i>Invoice</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a class="dropdown-link" href="dashboard-pricing-plan.html"><i class="fas fa-fw fa-gem"></i>My Plan</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a class="dropdown-link " href="dashboard-listing-profile.html"><i class="fas fa-fw fa-user-circle"></i>Profile</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a class="dropdown-link" href="index.html"><i class="fas fa-fw fa-sign-out-alt"></i>Logout</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- navigation close -->
            <!-- header close -->
        </div>
        <div class="db-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-2 col-lg-3 col-md-12 col-sm-12 col-12">
                        <!-- navbar sidebar start  -->
                        <nav class="navbar navbar-expand-lg db-sidenav">
                            <div class="offcanvas-collapse" id="db-sidenav">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="dashboard-overview.html"><i class="fas fa-fw fa-tachometer-alt"></i>Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="dashboard-listing.html"><i class="fas fa-fw fa-list"></i>Listing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="dashboard-request-quote.html"><i class="fas fa-fw fa-receipt"></i>Request Quote</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="dashboard-listing-reviews.html"><i class="fas fa-fw fa-star"></i>Reviews</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="dashboard-invoice.html"><i class="fas fa-fw fa-file-invoice"></i>Invoice</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="dashboard-pricing-plan.html"><i class="fas fa-fw fa-gem"></i>My Plan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="dashboard-listing-profile.html"><i class="fas fa-fw fa-user-circle"></i>Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.html"><i class="fas fa-fw fa-sign-out-alt"></i>Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <!-- navbar sidebar close  -->
                    </div>
                    <div class="col-xl-10 col-lg-9 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <!-- pageheader start  -->
                                <div class="db-pageheader d-flex justify-content-between">
                                    <div class="">
                                        <h2 class="db-pageheader-title">投稿完了</h2>
                                        <p class="db-pageheader-text"> Add your new listing for office space.</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="dashboard-listing.html" class="btn btn-primary">Back to listing</a>
                                    </div>
                                </div>
                                <!-- pageheader close  -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <!-- card header  -->
                                <div class="db-card listing-category">
                                    <div class="db-card-header">
                                        <h3 class="db-card-header-title">Select Category</h3>
                                    </div>
                                    <div class="db-card-body">
                                        <select class="select2 form-control" id="category">
                                            <option selected>Select Your Category</option>
                                            <option value="1">Office Space </option>
                                            <option value="2">Retail Space</option>
                                            <option value="3">Meeting Space</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- card header  -->
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="db-card listing-details">
                                    <div class="db-card-header">
                                        <h3 class="db-card-header-title">Listing Details</h3>
                                    </div>
                                    <div class="db-card-body">
                                        <!-- listing form start -->
                                        <form>
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" class="form-control" id="title" placeholder="Your Office Space title" required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <input type="text" class="form-control" id="address" placeholder="Space Address" required="">
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="country">Country</label>
                                                    <select class="select2 form-control" id="country">
                                                        <option selected>Select Your Country</option>
                                                        <option value="1">India</option>
                                                        <option value="2">UK</option>
                                                        <option value="3">US</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="state">State</label>
                                                    <select class="select2 form-control" id="state">
                                                        <option selected>Select Your State</option>
                                                        <option value="1">Gujarat</option>
                                                        <option value="2">London</option>
                                                        <option value="3">California</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="city">City</label>
                                                    <select class="select2 form-control" id="city">
                                                        <option selected>Select Your City</option>
                                                        <option value="1">Ahmedabad</option>
                                                        <option value="2">Chester</option>
                                                        <option value="3">Adelanto</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- listing form close  -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <!-- listing form price start  -->
                                <div class="db-card listing-price">
                                    <div class="db-card-header">
                                        <h3 class="db-card-header-title">Listing Price</h3>
                                        <div class="db-card-body">
                                            <form>
                                                <div class="form-group ">
                                                    <label for="type">Select Type</label>
                                                    <select class="select form-control" id="type">
                                                        <option selected>Hourly</option>
                                                        <option value="1">Monthly</option>
                                                        <option value="2">Daily</option>
                                                        <option value="3">Yearly</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="address">Price</label>
                                                    <input type="text" class="form-control" id="address" placeholder="$20" required="">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- listing form price close  -->
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <!-- listing form desc start  -->
                                <div class="db-card listing-description">
                                    <div class="db-card-header">
                                        <h3 class="db-card-header-title">Listing Descriptions</h3>
                                    </div>
                                    <div class="db-card-body">
                                        <textarea class="editor-textarea">Next, use our Get Started docs to setup Tiny!</textarea>
                                    </div>
                                </div>
                                <!-- listing form desc close  -->
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="db-card listing-amenities">
                                    <div class="db-card-header">
                                        <h3 class="db-card-header-title">Listing Amenities</h3>
                                    </div>
                                    <!-- listing amenitiers start  -->
                                    <div class="db-card-body">
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck19">
                                                    <label class="custom-control-label" for="customCheck19">Furnished</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck20">
                                                    <label class="custom-control-label" for="customCheck20">24/7 Access</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck21">
                                                    <label class="custom-control-label" for="customCheck21">Accessibility</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck22">
                                                    <label class="custom-control-label" for="customCheck22">Bike Rack</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck36">
                                                    <label class="custom-control-label" for="customCheck36">Storage</label>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck23">
                                                    <label class="custom-control-label" for="customCheck23">Coffee/Tea</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck24">
                                                    <label class="custom-control-label" for="customCheck24">Door w/Lock</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck25">
                                                    <label class="custom-control-label" for="customCheck25">Kitchen</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck26">
                                                    <label class="custom-control-label" for="customCheck26">Mailbox Services</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck37">
                                                    <label class="custom-control-label" for="customCheck37">Window View</label>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck27">
                                                    <label class="custom-control-label" for="customCheck27">Meeting Rooms</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck28">
                                                    <label class="custom-control-label" for="customCheck28">Print/Scan/Copy</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck29">
                                                    <label class="custom-control-label" for="customCheck29">WiFi Phone</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck30">
                                                    <label class="custom-control-label" for="customCheck30">Parking</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck31">
                                                    <label class="custom-control-label" for="customCheck31">Catering</label>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck32">
                                                    <label class="custom-control-label" for="customCheck32">Hosted Reception</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck34">
                                                    <label class="custom-control-label" for="customCheck34">On-site Restaurant</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck35">
                                                    <label class="custom-control-label" for="customCheck35">Pet Friendly</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- listing amenities close  -->
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="db-card listing-photo">
                                    <div class="db-card-header">
                                        <h3 class="db-card-header-title">Photos</h3>
                                    </div>
                                    <div class="db-card-body">
                                        <!-- listing dropzone start  -->
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="dropzone dz-clickable " action="/file-upload">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- listing dropzone close  -->
                                        <!-- listing photo start  -->
                                        <div class="row">
                                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-12 col-12">
                                                <div class="listing-photo-upload">
                                                    <img src="/assets/images/listing-photo-1.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-12 col-12">
                                                <div class="listing-photo-upload">
                                                    <img src="/assets/images/listing-photo-1.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-12 col-12">
                                                <div class="listing-photo-upload">
                                                    <img src="/assets/images/listing-photo-1.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-12 col-12">
                                                <div class="listing-photo-upload">
                                                    <img src="/assets/images/listing-photo-1.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-12 col-12">
                                                <div class="listing-photo-upload">
                                                    <img src="/assets/images/listing-photo-1.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-12 col-12">
                                                <div class="listing-photo-upload">
                                                    <img src="/assets/images/listing-photo-1.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-12 col-12">
                                                <div class="listing-photo-upload">
                                                    <img src="/assets/images/listing-photo-1.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-12 col-12">
                                                <div class="listing-photo-upload">
                                                    <img src="/assets/images/listing-photo-1.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-12 col-12">
                                                <div class="listing-photo-upload">
                                                    <img src="/assets/images/listing-photo-1.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-12 col-12">
                                                <div class="listing-photo-upload">
                                                    <img src="/assets/images/listing-photo-1.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-12 col-12">
                                                <div class="listing-photo-upload">
                                                    <img src="/assets/images/listing-photo-1.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-12 col-12">
                                                <div class="listing-photo-upload">
                                                    <img src="/assets/images/listing-photo-1.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- listing photo close  -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="db-card listing-video">
                                    <!-- listing video start  -->
                                    <div class="db-card-header">
                                        <h3 class="db-card-header-title">Listing Video</h3>
                                    </div>
                                    <div class="db-card-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="videolink">Video Link</label>
                                                <input type="email" class="form-control" id="videolink" placeholder="Your video link here">
                                            </div>
                                        </form>
                                    </div>
                                    <!-- listing video close  -->
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <button type="submit" class="btn btn-primary">Submit Listing</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer start  -->
        <div class="db-footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="db-footer-copyright">
                            <p class="db-footer-copyright-text">2020 &nbsp;©&nbsp; <a href="index.html"> Spacely</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer close  -->
    </div>

    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <script src="/assets/js/jquery-3.3.1.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/main-js.js"></script>
    <script src="/assets/js/jquery.slimscroll.js"></script>
    <script src="/assets/select2/select2.full.min.js"></script>
    <script src="/assets/select2/select2.min.js"></script>
    <script src="/assets/dropzone/dropzone.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
  </body>

</html>
