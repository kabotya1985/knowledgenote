<!DOCTYPE html>
 <html>
  <head>
   <meta charset=”UTF-8″>
   <link rel="stylesheet" type="text/css" charset="utf-8" href="{{ asset('/assets/css/Style.css') }}"/>
    <title>Index</title>
  </head>

  <body>

    <h1>Knowledge-Note</h1>

    <h2>outline</h2>

    <div class="parent">
      <p>世界にちらばるフレームワークをもっと使いやすく</p>
    </div>

    <div class="parent">
      <p class=".LexendMega" >WorkName</p>
    </div>

      <form action="{{ url('/search')}}", method="get">
        @csrf
        {{ csrf_field() }}
        <input type="search"name="search" placeholder="キーワードを入力">
        <input type="submit" name="searchbutton" , class="fas"  value="検索">
      </form>

    </div>

    <a href="signup/form">会員登録</a>

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
