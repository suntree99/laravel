{{-- @dd($posts) --}}

@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Halaman Blog Posts</h1>
    
    @foreach($posts as $post)
        <article class="mb-5 pb-4 border-bottom">
            <h2><a class="text-decoration-none" href="/post/{{ $post->slug }}">{{ $post->title }}</a></h2>
            <p>By. <a class="text-decoration-none" href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            <p>{{ $post->excerpt }}</p>
            <a class="text-decoration-none" href="/post/{{ $post->slug }}">Read More..</a>
        </article>
    @endforeach
@endsection