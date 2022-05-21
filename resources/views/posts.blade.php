@extends('app')
@section('konten')
<h1>halaman posts</h1>
@foreach($posts as $post)
    <article class="mb-5">
        <h1>            {{-- ini pake notasi objek yakni -> --}}    

            {{-- <a href="/posts/{{$post["slug"]}}">{{$post["title"]}} </a>  --}}
            {{-- <h1> {{$post->author}}</h1>  --}}
    {{-- <h1>{{$post->body}}</h1> --}}

            {{-- <a href="/posts/{{$post->slug}}">{{$post -> title}} </a>  --}}
            {{-- <a href="/posts/{{$post->id}}">{{$post -> title}} </a>  --}}
            <a href="/posts/{{$post->slug}}">{{$post -> title}} </a> 
            <p>{{$post -> excerpt}} </p>
    </article>
    
@endforeach
@endsection