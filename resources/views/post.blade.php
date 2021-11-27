

@extends('layouts.main')

@section('container')

<div class="container">
   <div class="row justify-content-center mb-5">
      <div class="col-md-8">
         <h1 class="mb-5">{{ $post->title }}</h1>
         <p>By <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> In <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

         @if ($post->image)
            <div style="max-height:1000px; overflow:hidden;">
             <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
            </div>
         @else
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
         @endif
        
         <article class="my-3 fs-5">
            {!! $post->body !!}
         </article>
        

         <a href="/blog" class="d-block mt-5">Back To Posts</a>
        
      </div>
   </div>
</div>



@endsection