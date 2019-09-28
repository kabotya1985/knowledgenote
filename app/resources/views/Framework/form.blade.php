<!DOCTYPE html>
<html>
 <head>
  <meta charset=”UTF-8″>
  <link rel="stylesheet" type="text/css" charset="utf-8" href="{{ asset('/assets/css/Style.css') }}"/>
   <title>投稿</title>
 </head>

  <body>






  </div>
    <form action="{{ url('/framework/confirm')}}" method="post">
      @csrf
      <p>frameworkname</p>

      <p>{{ $data['id'] }}</p>
      <input type="hidden" name="framework_id" value="{{ $data->id }}" />
      <p>{{ $data['name'] }}</p>
      <input type="hidden" name="framework_id" value="{{ $data->name }}" /> 

      <p>自分のワークを投稿する</p>

      <p>投稿作成欄</p>
      <input type="text" name="post" value="{{old('post')}}" placeholder="投稿内容を入力"><br>
      @if($errors->has('post'))<div class="invalid-feedback"><strong>{{ $errors->first('post') }}</strong></div>@endif

      <p>指定ジャンル</p>
      <input type="text" name="genre" value="{{old('genre')}}" placeholder="投稿者を入力"><br>
      @if($errors->has('genre'))<div class="invalid-feedback"><strong>{{ $errors->first('genre') }}</strong></div>@endif



      <p>投稿者入力欄</p>
      <input type="text" name="member" value="{{old('member')}}" placeholder="投稿者を入力"><br>
      @if($errors->has('member'))<div class="invalid-feedback"><strong>{{ $errors->first('member') }}</strong></div>@endif

      <input type="submit" name="confirm" , class="fas"  value="確認">
    </form>
  </div>


   <p>事例を表示する</p>



   <p>常設エリア</p>

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
