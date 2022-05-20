@extends('app')
@section('konten')
<h1>halaman posts</h1>
@foreach($posts as $post)
    <article class="mb-5">
        <h1>
            <a href="/posts/{{$post["slug"]}}">{{$post["title"]}} </a>
        </h1>
    <h1>By: {{$post["author"]}}</h1>
    <h1>{{$post["body"]}}</h1>
    </article>
    
@endforeach
@endsection