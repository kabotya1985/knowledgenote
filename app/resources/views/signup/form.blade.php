<!DOCTYPE html>
<html>
 <head>
  <meta charset=”UTF-8″>
  <link rel="stylesheet" type="text/css" charset="utf-8" href="{{ asset('/assets/css/Style.css') }}"/>
   <title>Index</title>
 </head>

  <body>

    <h1>会員登録</h1>


 </div>
   <form action="{{ url('/signup/confirm')}}" method="post">
     @csrf

     <p>ユーザー名</p>
     <input type="text" name="name" value="{{old('name')}}" placeholder="ユーザー名を入力"><br>
     @if($errors->has('name'))<div class="invalid-feedback"><strong>{{ $errors->first('name') }}</strong></div>@endif

     <p>メールアドレス</p>
     <input type="text" name="email" value="{{old('email')}}" placeholder="メールアドレスを入力"><br>
     @if($errors->has('email'))<div class="invalid-feedback"><strong>{{ $errors->first('email') }}</strong></div>@endif

     <p>パスワード</p>
     <input type="text" name="password" value="{{old('password')}}" placeholder="パスワードを入力"><br>
     @if($errors->has('password'))<div class="invalid-feedback"><strong>{{ $errors->first('password') }}</strong></div>@endif

     <input type="submit" name="confirm" , class="fas"  value="確認">
   </form>
 </div>

   <p>プロフィール画像選択欄</p>

   <p>プロフィール入力</p>

   <p>変更ボタン</p>

 </body>

 </html>
