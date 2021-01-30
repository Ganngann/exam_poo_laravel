@extends('admin.templates.dashboard')

@section('content')
<div class="row">
    <!-- Featured News -->
    <h2>Latest Blog Posts</h2>
    <div class="grid  grid-rows-1 grid-cols-4 gap-4">

        @php
        $posts = \App\Models\Post::orderBy('created_at', 'DESC')->take(4)->get()
        @endphp
        @each('posts._media_object', $posts, 'post')
    </div>

</div>
@endsection
