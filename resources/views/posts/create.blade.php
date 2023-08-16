@extends('layouts.app')

@section('meta-description', 'ViewForm for new Post')
@section('title_page', 'Create Post')

@section('content')

    <h1>Create a new Post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label>
            Title <br>
            <input name="title" type="text" value="{{old('title')}}">
            @error('title')
                <br>
                <small style="color: red">{{ $message }}</small>
            @enderror
        </label><br>
        <label>
            Body <br>
            <textarea name="body">{{old('body')}}</textarea>
            @error('body')
                <br>
                <small style="color: red">{{ $message }}</small>
            @enderror
        </label><br>
        <button type="submit">Save</button>
        <br>
    </form>
    <br>
    
    <a href="{{route('posts.index')}}">Back</a>

@endsection