<!DOCTYPE html>
<html>
 <head>
  <meta charset=”UTF-8″>
  <link rel="stylesheet" type="text/css" charset="utf-8" href="{{ asset('/assets/css/Style.css') }}"/>
   <title>Index</title>
 </head>

  <body>

    <h1>会員が完了しました</h1>

    <p>ユーザー名</p>
    <p>{{ $param['name'] }}</p>

    <p>メールアドレス</p>
    <p>{{ $param['email'] }}</p>

    <p>パスワード</p>
    <p>{{ $param['password'] }}</p>

   <a href="/index">トップに戻る</a>

 </body>

 </html>
