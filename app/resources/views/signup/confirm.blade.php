<!DOCTYPE html>
<html>
 <head>
  <meta charset=”UTF-8″>
  <link rel="stylesheet" type="text/css" charset="utf-8" href="{{ asset('/assets/css/Style.css') }}"/>
   <title>signup/confirm</title>
 </head>

  <body>

    <h1>会員登録</h1>

      <form action="{{ url('/signup/done')}}", method="post">
        @csrf
        <input type='hidden' name='name' value="{{ $param['name']}}">
        <input type='hidden' name='email' value="{{ $param['email']}}">
        <input type='hidden' name='password' value="{{ $param['password']}}">
        {{ csrf_field() }}

        <p>ユーザー名</p>
        <p>{{ $param['name'] }}</p>

        <p>メールアドレス</p>
        <p>{{ $param['email'] }}</p>

        <p>パスワード</p>
        <p>{{ $param['password'] }}</p>

        <input type="submit" name="confirm" , class="fas"  value="登録">
      </form>
    </div>


    <p>プロフィール画像選択欄</p>

    <p>プロフィール入力</p>

    <p>変更ボタン</p>

  </body>

 </html>
