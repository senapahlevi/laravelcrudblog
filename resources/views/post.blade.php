@extends('app')
@section('konten')
{{-- ini buat slug detail postingan yang cocok ketika diklik --}}
     <article class="mb-5">
   <h2>{{$post["title"]}}</h2>
   <h5>{{$post["author"]}}</h5>
   <p>{{$post["body"]}}</p>
    </article>
    
 @endsection