<!DOCTYPE html>
<html>
 <head>
  <meta charset=”UTF-8″>
  <link rel="stylesheet" type="text/css" charset="utf-8" href="{{ asset('/assets/css/Style.css') }}"/>
   <title>投稿内容確認</title>
 </head>

  <body>

   <p>投稿確認</p>

   <p>frameworkname</p>
    <p>{{ $data['id']->$param['franmework'] }}</p>
    <p>{{ $data['name'] }}</p>

   <p>投稿内容</p>
   <p>{{ $param['post'] }}</p>

   <p>投稿者</p>
   <p>{{ $param['genre'] }}</p>

   <p>投稿者</p>
   <p>{{ $param['member'] }}</p>

   <a href="/index">トップに戻る</a>

   <p>
     最新の投稿
   </p>

   <p>
     最新の投稿へのリンク
   </p>

   <p>
     左右ボタン
   </p>

   <p>
     最新の事例
   </p>

   <p>
     最新の事例へのリンク
   </p>
bn
   <p>
     左右ボタン
   </p>

   <p>
     参考文献
   </p>

   <p>
     参考文献へのリンク
   </p>

   <p>
     左右ボタン
   </p>

   <footer>
     <small class="parent">
       copyrights &copy; 2019 Knowledgenote All rights Reserved.
     </small>
   </footer>


   <p>常設エリア</p>

 </body>

 </html>
