@extends('app')
@section('konten')
  
<h1 class="mb-5">Post Category {{$category}} </h1>
{{-- <h1 class="mb-5">Post Category {{$category}} </h1> --}}
   {{-- <h2 class="mb-5">{{$posts->title}}</h2> --}}
@foreach ($posts as $post)
    <article class="mb-5">
        <h2><a href="/posts/{{$post->slug}}">{{$post->title}}</a></h2>
        <p>{{$post->excerpt}}</p>
    </article>
@endforeach    
@endsection

{{-- tinker ketik $category = Category::first() then $category->posts kalo salah malah ada ketegori lain coba cek relasi dari Category.php apakahh hasmany atau belongsto / yg lain?
    category->name itu outputnya name aja webprogramming bukan slug nya ye!! 
    --}}