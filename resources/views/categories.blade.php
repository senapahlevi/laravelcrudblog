@extends('app')
@section('konten')
  
<h1 class="mb-5">Post Categories </h1>
   {{-- <h2 class="mb-5">{{$posts->title}}</h2> --}}
@foreach ($categories as $category)
    <ul>
        <li>
            <h2><a href="/categories/{{$category->slug}}">{{$category->name}}</a></h2>
        </li>
    </ul>
@endforeach    
@endsection

{{-- tinker ketik $category = Category::first() then $category->posts kalo salah malah ada ketegori lain coba cek relasi dari Category.php apakahh hasmany atau belongsto / yg lain?
     --}}