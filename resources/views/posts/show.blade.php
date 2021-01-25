{{--
  Variables disponibles
    - $post Post
 --}}
 @extends('templates.index')

 @section('title')
   {{ $post->title }}
 @endsection

 @section('content')

   <p class="mb-5">
     <img src="{{ asset('assets/images/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid">
   </p>

   <h1 class="mb-3 h1">{{ $post->title }}</h1>
   <div class="">
     {!! $post->content !!}
   </div>

  {{-- Les tags du post --}}
     @include('tags._post_tags', ['tags' => $post->tags])

  {{-- L'auteur du post --}}
     @include('authors._post_author', ['author' => $post->author])


   <div class="pt-5 mt-5">
     {{-- Commentaires du post --}}
        @include('comments._post_comments', ['comments' => $post->comments])

     {{-- Formulaire d'ajout d'un commentaire --}}
        @include('comments._post_form_add')
   </div>

 @endsection
