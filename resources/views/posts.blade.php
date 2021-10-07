<!-- <html>

<head>
    <title>
        Blog
    </title>

<body>

    <h1>Posts</h1>
    <ul>
        @foreach($posts as $post)
        <li>

            <a href="/posts/{{$post->id}}">{{ $post->title }} </a>
        </li>
        @endforeach
    </ul>
</body>
</head>

</html> -->

@extends('layouts.app')

@section('title', $post->title)

@section('content')

<h1>Posts</h1>
<ul>
    @foreach($posts as $post)
    <li>

        <a href="/posts/{{$post->id}}">{{ $post->title }} </a>
    </li>
    @endforeach
</ul>
@endsection