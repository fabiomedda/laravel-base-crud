@extends('layouts.app')

@section('title')
Posts
@endsection

@section('content')
<h1>Posts</h1>
<a href="{{route('posts.create')}}">create a new post</a>

@foreach($posts as $post)

<h2>{{ $post->title }}</h2>
<p>{{ $post->body }}</p>

@endforeach

@endsection