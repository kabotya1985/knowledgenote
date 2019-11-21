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
    <link rel="stylesheet" type="text/css" href="/assets/css/slick.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/slick-theme.css" />
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
        <!-- header close -->
        <div style="margin-top:24px;">
            <div style="width:100%;">
                <div class="container-fluid">
                    <div style="padding:18px 0;">
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="hero-search-area-caption">
                                    <h1 style="color:black;font-size:36px;font-weight:bold;">{{ $data['name'] }}フレームワーク</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="listing-detail-header" id="overview">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="listing-detail-head">
                                <h4 class="listing-detail-card-title" style="padding:0;margin:0;">イメージ</h4>
                                <div style="padding:12px 0 24px 0;">
                                    <img src="{{ $data['image_url'] }}" style="width:100%;border-radius:6px;" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="listing-detail-head" >
                                <h4 class="listing-detail-card-title" style="padding:0;margin:0;">説明</h4>
                                <div style="padding:6px 0 12px 0;">
                                    <p>{{ $data['description'] }}</p>
                                    <a href ="{{ $data['URL'] }}">{{ $data['URL'] }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div style="padding:18px 0;">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="hero-search-area-caption">
                            <h1 style="color:black;font-size:36px;font-weight:bold;">{{ $data['name'] }}フレームワーク事例</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="margin-top:24px;">
            <div class="row">
                @if (count($case_list) > 0)
                    @foreach ($case_list as $case)
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="listing-block">
                                <div class="listing-img">
                                    <div style="width:100%;height:280px;overflow:hidden;background-color:#fefefe;border:1px solid #eee;border-top-left-radius:6px;border-top-right-radius:6px;">
                                        <div style="width:100%;padding:139px 0;text-align:center;background-color:#eee;border-top-left-radius:3px;border-top-right-radius:3px;">No Image</div>
                                        <div class="listing-badge">ビジネス</div>
                                    </div>
                                    @if ($case->company != "")
                                        <a class="listing-category-badge badge-light-brose">
                                            {{ $case->company }}
                                        </a>
                                    @endif
                                    <div class="like-icon"></div>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-content-head" style="height:60px;">
                                        <h3 class="listing-content-head-title"> <a href="{{ $case->url }}" target="_blank">{{ $case->case }}</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-12">
                        <div style="text-align:center;padding:120px 0;">
                            <h3>該当するフレームワーク事例はありませんでした。</h3>
                        </div>
                    </div>
                @endif
            </div>
        </div>


    </div>

    <div class="tiny-footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <p class="tiny-footer-text">Copyright © 2019 Knowledgenote. All rights reserved</p>
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
