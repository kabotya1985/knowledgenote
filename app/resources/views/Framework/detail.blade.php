<!DOCTYPE html>
<html>
 <head>
  <meta charset=”UTF-8″>
  <link rel="stylesheet" type="text/css" charset="utf-8" href="{{ asset('/assets/css/Style.css') }}"/>
   <title>Index</title>
 </head>

  <body>

    <h1>Framework</h1>

    <ul>FW名</ul>
      <p>{{ $data['id'] }}</p>
      <input type="hidden" name="framework_id" value="{{ $data->id }}" >
      <p>{{ $data['name'] }}</p>
      <input type="hidden" name="framework_id" value="{{ $data->name }}" > 
      <p>ジャンル</p>
      <p>{{ $data['genre'] }}</p>

    <li>タグ</li>
    <li>タグ</li>
    <li>タグ</li>

    <p>説明</p>
      <p>{{ $data['description'] }}</p>

    <p>ＦＷ画像　dbより</p>

    <a href="/framework/form?id={{ $data->id }}">
     自分のワークを作成する
    </a>
    <!-- 検索内容表 -->

   <p>常設エリア</p>

   <p>最新の投稿</p>

   <p>最新の投稿へのリンク</p>

   <p>左右ボタン</p>

   <p>最新の事例</p>

   <p>最新の事例へのリンク</p>

   <p>左右ボタン</p>

   <p>参考文献</p>

   <p>参考文献へのリンク</p>

   <p>左右ボタン</p>

   <footer>
     <small class="parent">
       copyrights &copy; 2019 Knowledgenote All rights Reserved.
     </small>
   </footer>


 </body>

 </html>
