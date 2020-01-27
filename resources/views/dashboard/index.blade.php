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
            <!-- navigation close -->
            <!-- header close -->
        
        <!-- content start -->
        <div class="db-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                        <nav class="navbar db-sidenav">
                            <div class="offcanvas-collapse" id="db-sidenav">
                                  <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="/"><i class="fas fa-fw "></i>Toppage</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/dashboard"><i class="fas fa-fw "></i>Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="dashboard-listing.html"><i class="fas fa-fw "></i>Post</a>
                                    </li>
                          
                                    <li class="nav-item">
                                        <a class="nav-link" href="dashboard-listing-profile.html"><i class="fas fa-fw "></i>Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.html"><i class="fas fa-fw "></i>Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
                        <div class="db-pageheader d-xl-flex justify-content-between">
                            <div class="">
                                <h2 class="db-pageheader-title">dashboard</h2>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="dashboard-add-listing.html" class="btn btn-primary">newposting</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card-lines-tab">
                                    <div class="tab-content card-listing-tab-body" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-listing" role="tabpanel" aria-labelledby="pills-listing-tab">
                                            <div class="table-responsive listing-table">
                                                <table class="table first">
                                                    <thead>
                                                        <tr>
                                                            <th>Image</th>
                                                            <th>FWname</th>
                                                            <th>maintag</th>
                                                            <th>access</th>
                                                            <th data-orderable="false">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                        <tr>
                                                            <td>
                                                                <div class="listing-table-img"><a href="#">
                                                                       
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="listing-table">
                                                                    
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="listing-table-date">
                                                                   
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="listing-table"></div>
                                                            </td>
                                                            <td>
                                                                <div class="listing-table"></div>
                                                            </td>
                                                            <td>
                                                                <div class="listing-table-action">
                                                                    <div class="dropdown">
                                                                        <a href="#" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="fas fa-ellipsis-v"></i>
                                                                        </a>
                                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                            <a class="dropdown-item" href="#">Edit Details</a>
                                                                            <a class="dropdown-item" href="#">Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- content close -->
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
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/main-js.js"></script>
    <script src="assets/datatables//js/jquery.dataTables.min.js"></script>
    <script src="assets/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/datatables/js/data-table.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
</body>

</html>