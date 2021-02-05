{{-- Variables disponibles
- $posts ARRAY(Post) --}}
@extends('templates.page')

@section('title')
    Blog
@endsection

@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                @each('posts._card', $posts, 'post')
            </div>
              <!-- Pagination -->
              <div class="pagination-wrapper">
                {{ $posts->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection
