<h1>トップページ</h1>

{{ $posts }}

@foreach ($posts as $post)
    <p>これは {{ $post->id }} ユーザーです。</p>
@endforeach