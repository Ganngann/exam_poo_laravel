{{--
Variables disponibles
- $posts ARRAY(Post)
--}}
@extends('templates.index')

@section('title')
    Blog
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/posts/index.js') }}"></script>
@endsection

@section('content')
    <div class="container">
        <div class="row d-flex" id="posts_list">

            {{-- @each('posts._card', $posts, 'post') --}}
            @include('posts._list')


        </div>

        @include('posts._more_btn')

    </div>
@endsection
