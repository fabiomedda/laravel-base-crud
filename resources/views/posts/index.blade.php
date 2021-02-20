@extends('layouts.app')

@section('title')
Posts
@endsection

@section('content')
<main>

    <h1>Posts</h1>
    <a class="btn btn-primary" href="{{route('posts.create')}}">create a new post</a>

    @foreach($posts as $post)

    <h2>{{ $post->title }}</h2>
    <p>{{ $post->body }}</p>
    <div class="d-flex">

        <a class="btn btn-primary" href="{{route('posts.show', ['post' => $post->id] )}}">
            <i class="fas fa-eye fa-lg fa-fw"></i>
            View
        </a>

        <a class="btn btn-warning" href="{{route('posts.edit', ['post' => $post->id] )}}">
            <i class="fas fa-pen fa-lg fa-fw"></i>
            Edit
        </a>

        <form action="{{route('posts.destroy', ['post' => $post->id] )}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">
                <i class="fas fa-trash fa-lg fa-fw"></i>
                Delete
            </button>
        </form>

    </div>

    @endforeach

</main>


@endsection