@extends('app')
@section('konten')
{{-- ini buat slug detail postingan yang cocok ketika diklik --}}
     <article class="mb-5">
       {{-- ini object array --}}
   {{-- <h2>{{$post["title"]}}</h2>
   <h5>{{$post["author"]}}</h5>
   <p>{{$post["body"]}}</p> --}}

   <h2 class="mb-5">{{$post->title}}</h2>
   {{-- <h5>{{$post->author}}</h5> --}}
   {{-- <p>{{$post->body}}</p> --}}
   {{-- ini buat daleman nya pake <h1>,<p>,dkk html ini bisa nyesuain html nya  --}}
   {!! $post->body !!}

    </article>
    
 @endsection