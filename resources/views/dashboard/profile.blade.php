<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="世界にちらばるフレームワークをもっと使いやすく.">
    <title>KnowledgeNote - ビジネスで約立つフレームワークをご紹介</title>
    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/fonts/fontawesome/css/all.css">
    <link rel="stylesheet" type="/text/css" href="/assets/css/slick.css" />
    <link rel="stylesheet" type="/text/css" href="/assets/css/slick-theme.css" />
    <link rel="stylesheet" href="/assets/flag-icon/flag-icon.min.css">
    <link rel="stylesheet" href="/assets/css/theme-style.css">
    <link rel="stylesheet" type="/text/css" href="/assets/select2/select2.min.css">
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
                                    <li><a class="nav-link" href="/index">ホーム</a></li>
                                    <!-- li><a class="nav-link" href="/framework/form">framework作成</a></li -->
                                    <!-- li><a class="nav-link" href="/member">member</a></li -->
                                    <!-- li><a class="nav-link" href="/signin/form">ログイン</a></li -->
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- navigation close -->
        </div>
        <div class="db-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-2 col-lg-3 col-md-12 col-sm-12 col-12">
                        <nav class="navbar db-sidenav">
                    <div class="offcanvas-collapse" id="db-sidenav">
                        <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/dashboard/index"><i class="fas fa-fw fa-tachometer-alt"></i>Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="/dashboard/post"><i class="fas fa-fw fa-list"></i>post</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/dashboard/profile"><i class="fas fa-fw fa-receipt"></i>profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.html"><i class="fas fa-fw fa-sign-out-alt"></i>Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-xl-10 col-lg-9 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <!-- pageheader start -->
                                <div class="db-pageheader">
                                    <h2 class="db-pageheader-title">Profile</h2>
                                    <p class="db-pageheader-text"> In commodo lorem ut erat sagittis variusm euismod lectus vehicula cursus est.</p>
                                </div>
                                <!-- pageheader close -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <!-- card line tab start -->
                                <div class="card-lines-tab">
                                    <ul class="nav nav-pills card-lines-tab-header" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-editprofile-tab" data-toggle="pill" href="#pills-editprofile" role="tab" aria-controls="pills-editprofile" aria-selected="true">Edit profile</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-updatephoto-tab" data-toggle="pill" href="#pills-updatephoto" role="tab" aria-controls="pills-updatephoto" aria-selected="false">Update photo</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-password-tab" data-toggle="pill" href="#pills-password" role="tab" aria-controls="pills-password" aria-selected="false">Change password</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content card-lines-tab-body" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-editprofile" role="tabpanel" aria-labelledby="pills-editprofile-tab">
                                            <form class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="profilefname">First Name</label>
                                                    <input type="text" class="form-control" id="profilefname" placeholder="" required="">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="profilelname">Last Name</label>
                                                    <input type="text" class="form-control" id="profilelname" placeholder="" required="">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="profileemail">Email Address</label>
                                                    <input type="email" class="form-control" id="profileemail" placeholder="" required="">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="profilenumber">Phone</label>
                                                    <div class="form-row">
                                                        <div class="col-md-2">
                                                            <select class="select2 custom-select" required="" id="search-hide">
                                                                <option selected>+91</option>
                                                                <option value="1">+1</option>
                                                                <option value="2">+44</option>
                                                                <option value="3">+52</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <input type="tel" class="form-control" id="profilenumber" placeholder="" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-sm">Save</button>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="pills-updatephoto" role="tabpanel" aria-labelledby="pills-updatephoto-tab">
                                            <div class="dropzone" action="/file-upload">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-password" role="tabpanel" aria-labelledby="pills-password-tab">
                                            <form>
                                                <div class="form-group">
                                                    <label for="oldpassword">Old Password</label>
                                                    <input type="password" class="form-control" id="oldpassword" placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="newpassword">New Password</label>
                                                    <input type="password" class="form-control" id="newpassword" placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="rewritenewpassword">Rewrite New Password</label>
                                                    <input type="password" class="form-control" id="rewritenewpassword" placeholder="Password">
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-sm">Save</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                 <!-- card line tab close -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- footer start -->
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
        <!-- footer close -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <script src="/assets/js/jquery-3.3.1.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/main-js.js"></script>
    <script src="/assets/dropzone/dropzone.min.js"></script>
    <script src="/assets/js/jquery.slimscroll.js"></script>
    <script src="/assets/select2/select2.full.min.js"></script>
    <script src="/assets/select2/select2.min.js"></script>
    
</body>

</html>