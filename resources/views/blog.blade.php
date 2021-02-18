@extends('layouts.app')

@section('title')
Blog
@endsection

@section('content')

@foreach($posts as $post)

<h2>{{ $post->title }}</h2>
<p>{{ $post->body }}</p>

@endforeach

@endsection