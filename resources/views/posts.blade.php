@extends('app')
@section('konten')
<h1>halaman posts</h1>
@foreach($posts as $post)
    <article class="mb-5 border-bottom pb-4">
                     {{-- ini pake notasi objek yakni -> --}}    

            {{-- <a href="/posts/{{$post["slug"]}}">{{$post["title"]}} </a>  --}}
            {{-- <h1> {{$post->author}}</h1>  --}}
    {{-- <h1>{{$post->body}}</h1> --}}

            {{-- <a href="/posts/{{$post->slug}}">{{$post -> title}} </a>  --}}
            {{-- <a href="/posts/{{$post->id}}">{{$post -> title}} </a>  --}}
           <h1> 
              <a href="/posts/{{$post->slug}}" class="text-decoration-none">{{$post -> title}} </a> 
  </h1>
  {{-- ini $post->user->name meesti ada relasi nya sen! models Post sama models User kayak hastomany belongsto,dkk--}}
            
    <p>
        by <a href="#">{{$post->user->name}} </a> 
        at <a href="/categories/{{$post->category->slug}}" class="text-decoration-none">{{$post->category->name}} alloss</a>
    </p>
            <p>{{$post -> excerpt}} </p>
            <h6> <a href="/posts/{{$post->slug}}">Readmore ... </a></h6>
    </article>
    
@endforeach
@endsection