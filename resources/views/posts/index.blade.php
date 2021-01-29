{{--
Variables disponibles
- $posts ARRAY(Post)
--}}
@extends('templates.page')

@section('title')
    Blog
@endsection

@section('scripts')
    {{-- <script src="{{ asset('assets/js/posts/index.js') }}"></script>
    --}}
@endsection

@section('content')
    <div class="section">
        <div class="container">
            <div class="row">

                @each('posts._card', $posts, 'post')


                {{-- {{ $works = \App\Models\Work::>get()simplePaginate(10) }} --}}


                <!-- Pagination -->
                <div class="pagination-wrapper">
                    {{-- {{ $posts->onEachSide(3)->links('pagination::bootstrap-4') }} --}}
                    {{ $posts->links('pagination::bootstrap-4') }}
                </div>

            </div>
        </div>
    </div>
@endsection
