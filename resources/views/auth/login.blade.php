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

<body class="layout-row">
    <div class="d-flex flex-column flex">
        <div class="row no-gutters h-100">
            <div class="col-md-6 bg-primary" style="">
                <div class="p-3 p-md-5 d-flex flex-column h-100">
                    <h4 class="mb-3 text-white">knowledgenoteへログイン</h4>
                    <div class="text-fade"></div>
                    <div class="d-flex flex align-items-center justify-content-center">
                    </div>
                    <div class="d-flex text-sm text-fade">
                        
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="content-body">
                    <div class="p-3 p-md-5">
                        <h5>ログイン</h5>
                        <p>
                            <small class="text-muted">アカウントを入力してログインしてください</small>
                        </p>
                        <form method="POST" action="/login">
                            @csrf
                            <div class="form-group">
                                <label>メールアドレス</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Enter email">
                                @error('email') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
                            </div>
                            <div class="form-group">
                                <label>パスワード</label>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" placeholder="Password">
                                @error('password') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
                                <!-- div class="my-3 text-right">
                                    <a href="forgot-password.html" class="text-muted">Forgot password?</a>
                                </div -->
                            </div>
                            <!-- div class="checkbox mb-3">
                                <label class="ui-check">
                                    <input type="checkbox">
                                    <i></i> Remember me
                                </label>
                            </div -->
                            <button type="submit" class="btn btn-primary mb-4">ログイン</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/libs/jquery/dist/jquery.min.js"></script>
    <script src="/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/libs/pjax/pjax.min.js"></script>
    <script src="/assets/js/ajax.js"></script>
    <script src="/assets/js/lazyload.config.js"></script>
    <script src="/assets/js/lazyload.js"></script>
    <script src="/assets/js/plugin.js"></script>
    <script src="/libs/scrollreveal/dist/scrollreveal.min.js"></script>
    <script src="/libs/feather-icons/dist/feather.min.js"></script>
    <script src="/assets/js/plugins/feathericon.js"></script>
    <script src="/assets/js/theme.js"></script>
    <script src="/assets/js/utils.js"></script>
    </body>
</html>