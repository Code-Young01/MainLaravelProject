@extends('layouts.app')

@section('meta-description', $post->body)
@section('title_page', $post->title)

@section('content')

    <h1> {{ $post->title }}</h1>
    <p> {{ $post->body}} </p>

    <a href="{{route('posts.index')}}">Back</a>

@endsection