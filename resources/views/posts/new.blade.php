	<h1>新規投稿ページ</h1>

<!-- <form action="/posts" method="post">
  <input type="text" name="content">
  <input type="submit" value="投稿する">
</form> -->

{{ Form::open(['url' => '/posts' , 'method' => 'post']) }}

{{ Form::text('content', null) }}

{{ Form::submit('投稿する', ['class'=>'submit']) }}

{{ Form::close() }}