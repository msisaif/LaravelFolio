@php
    use \App\Models\Post;

    $posts = Post::all();
@endphp

<div>
    Post List
</div>

<br>
@foreach ($posts as $post)
<div>
    <a href="/posts/{{ $post->id }}">
        {{ $post->title }} 
    </a>
    <br>
    {{ $post->body }}   
</div>
<br>
@endforeach