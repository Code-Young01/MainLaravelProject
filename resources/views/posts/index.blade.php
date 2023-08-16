@extends('layouts.app')

@section('meta-description', 'Blog meta description')
@section('title_page', 'Blog')

@section('content')

<h1>Blog</h1>
<a href="{{ route('posts.create') }}">Create new Post</a>
@foreach ($posts as $post)
    <h2>
        <a href="{{route('posts.show', $post)}}">{{ $post->title }}</a>
    </h2>
        
@endforeach


@endsection
