<!DOCTYPE html>
<html>
 <head>
  <meta charset=”UTF-8″>
  <link rel="stylesheet" type="text/css" charset="utf-8" href="{{ asset('/assets/css/Style.css') }}"/>
   <title>投稿内容確認</title>
 </head>

  <body>

    <p>frameworkname</p>
     <p>{{ $data['id'] }}</p>
     <p>{{ $data['name'] }}</p>


   <form action="{{ url('/framework/done')}}", method="post">
     @csrf

     <input type='hidden' name='id' value="{{ $data['id']}}">

     <input type='hidden' name='post' value="{{ $param['post']}}">
     <input type='hidden' name='genre' value="{{ $param['genre']}}">
     <input type='hidden' name='member' value="{{ $param['member']}}">
     {{ csrf_field() }}


      <p>{{ $data['id'] }}</p>

     <p>投稿内容</p>
     <p>{{ $param['post'] }}</p>

     <p>指定ジャンル</p>
     <p>{{ $param['genre'] }}</p>


     <p>投稿者</p>
     <p>{{ $param['member'] }}</p>



     <input type="submit" name="confirm" , class="fas"  value="投稿">

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

 </body>

 </html>
