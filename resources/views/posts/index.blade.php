<link rel="stylesheet" href="{{ asset('css/posts.css') }}">

<h1>トップページ</h1>

<a href="{{ url('/posts/new') }}">新規投稿</a>

@foreach ($posts as $post)
<div class="post">
  <div class="post-date">
    投稿日時：{{ $post->created_at }}
  </div>
  <div class="post-content">
    {{ $post->content }}
  </div>
</div>
@endforeach