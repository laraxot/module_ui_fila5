<?php

declare(strict_types=1);
<<<<<<< .merge_file_IGMQWy
<<<<<<< HEAD
=======

>>>>>>> 804451c (Lint)
=======

>>>>>>> .merge_file_M5K9lF
?>
@props(['post'])

@if ($post->published_at)
    Published on {{ $post->published_at->format('M jS, Y') }} —
    in <a href="{{ route('post.index', ['category' => $post->category->slug]) }}">{{ $post->category->name }}</a>
@else
    [Not published]
@endif
