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
                                    <li><a class="nav-link" href="/register">登録</a></li>
                                    <li><a class="nav-link" href="/login">ログイン</a></li>
                                </ul>
                            </div>
                            <div class="user_id">
                                {{ Auth::id() }}
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- navigation close -->
        </div>
        <!-- header close -->

        <div class="container-fluid">
            <div style="padding:18px 0;">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="hero-search-area-caption">
                            <h1 style="color:black;font-size:36px;font-weight:bold;">フレームワークを探す</h1>
                        </div>
                        <form action="/" method="get">
                            <div style="max-width:100%;width:580px;margin:0 auto;">
                                <input name="keyword" type="text" placeholder="framework" class="form-control" style="border-radius:6px;max-width:70%;width:420px;float:left;margin-right:10px;" value="{{ $keyword ?? '' }}">
                                <input name="searchbutton" type="submit" class="btn btn-primary" style="max-width:25%;width:150px;font-weight:bold;" value="検索" />
                                <div style="clear:both;"><hr style="display:none;" /></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <br />

        <div style="margin-top:24px;">
            <div class="row">
                @if (count($framework_list) > 0)
                    @foreach ($framework_list as $framework)
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="listing-block">
                            <div class="listing-img">
                                <div style="width:100%;height:280px;overflow:hidden;background-color:#fefefe;border:1px solid #eee;border-top-left-radius:6px;border-top-right-radius:6px;">
                                    @if ($framework->image_url != "")
                                        <a href="/framework/detail?id={{ $framework->id }}"><img src="{{ $framework->image_url }}" style="min-height:280px;border-top-left-radius:3px;border-top-right-radius:3px;" alt="" class="img-fluid"></a>
                                    @else
                                        <div style="width:100%;padding:139px 0;text-align:center;background-color:#eee;border-top-left-radius:3px;border-top-right-radius:3px;">No Image</div>
                                    @endif
                                    <div class="listing-badge">ビジネス</div>
                                </div>
                                @if ($framework->source_name != "")
                                    <a class="listing-category-badge badge-light-brose">
                                        引用元: {{ $framework->source_name }}
                                    </a>
                                @endif
                                <div class="like-icon"></div>
                            </div>
                            <div class="listing-content">
                                <div class="listing-content-head" style="height:100px;">
                                    <h3 class="listing-content-head-title"> <a href="/framework/detail?id={{ $framework->id }}">{{ $framework->name }}</a></h3>
                                    <p class="listing-content-head-text">{{ mb_substr($framework->description, 0, 90) }}...</p>
                                </div>
                                <!-- div class="review-content-rating">
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star empty"></span>
                                    <a class="rating-review">4.0</a>
                                </div -->
                                <!-- div class="listing-content-meta">
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
                                </div -->
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                    <div class="col-12">
                        <div style="text-align:center;padding:120px 0;">
                            <h3>「{{ $keyword }}」に該当するフレームワーク情報はありませんでした。</h3>
                        </div>
                    </div>
                @endif
            </div>
        </div>

        <div class="container-fluid">
            <div style="padding:18px 0;">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="hero-search-area-caption">
                            <h1 style="color:black;font-size:36px;font-weight:bold;">おすすめフレームワーク書籍</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <iframe src="https://rcm-fe.amazon-adsystem.com/e/cm?o=9&p=12&l=ur1&category=books&f=ifr&linkID=e48ec2444b35d43f092c28494c63bd8d&t=tosi1985-22&tracking_id=tosi1985-22" width="300" height="250" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
               <!-- footer section start -->
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
    <script src="/assets/select2/select2.full.min.js"></script>
    <script src="/assets/select2/select2.min.js"></script>
    <script src="/assets/js/slick.min.js"></script>
</body>

</html>
