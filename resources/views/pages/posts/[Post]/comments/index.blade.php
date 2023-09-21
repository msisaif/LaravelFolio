@php
    $comments = $post->comments;
@endphp

<br>
@foreach ($comments as $comment)
<div>
    {{ $comment->body }}   
    <br>
    <a href="/posts/{{ $post->id }}/comments/{{ $comment->id }}">
        Full Comment
    </a>
</div>
<br>
@endforeach