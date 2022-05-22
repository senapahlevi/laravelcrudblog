@extends('app')
@section('konten')
{{-- ini buat slug detail postingan yang cocok ketika diklik --}}
     <article class="mb-5">
       {{-- ini object array --}}
   {{-- <h2>{{$post["title"]}}</h2>
   <h5>{{$post["author"]}}</h5>
   <p>{{$post["body"]}}</p> --}}
   <h2 class="mb-5">{{$post->title}}</h2>
    <p>by :sena in <a href="/categories/{{$post->category->slug}}">
    {{$post->category->name}}
    </p>
   {{-- <h5>{{$post->author}}</h5> --}}
   {{-- <p>{{$post->body}}</p> --}}
   {{-- ini buat daleman nya pake <h1>,<p>,dkk html ini bisa nyesuain html nya  --}}
   {!! $post->body !!}
   {{-- {{$post->category->name}} ini buat munculin coba cek dulu sen 
   misal lo di tinker ceknya $post = Post::first() nah yg muncul misal category id =4 (web programming)
   yaudah si sistem inget nya category id = 4 (web proggramming)
   then $post->category lu enter keliatan hasil nya dan $post->category->name sen coba
   --}}

    </article>
    
 @endsection