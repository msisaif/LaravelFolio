{{-- 
@php
    use \App\Models\Post;

    $post = Post::find($id);
@endphp
--}}

<div>
    {{ $post->title }}
    <br>
    {{ $post->body }}
    <br>
    <a href="/posts/{{ $post->id }}/comments">
        comments
    </a>
</div>