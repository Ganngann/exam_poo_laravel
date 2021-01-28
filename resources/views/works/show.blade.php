{{--
Variables disponibles
- $work Work
--}}
@extends('templates.page')

@section('title')
    POST - {{ $work->title }}
@endsection

@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                <!-- Blog Post -->
                <div class="col-sm-8">
                    <div class="blog-post blog-single-post">
                        <div class="single-post-title">
                            <h2>{{ $work->title }}  id = {{ $work->id }}</h2>
                        </div>
                        <div class="single-post-image">
                            <img src="{{ asset('assets/img/blog/' . $work->image) }}.jpg" alt="{{ $work->title }}">
                        </div>
                        <div class="single-post-info">
                            <i class="glyphicon glyphicon-time"></i>
                            {{ \Carbon\Carbon::parse($work->created_at)->format('d M, Y') }}
                            <a href="#" title="Show Comments"><i class="glyphicon glyphicon-comment"></i>11 </a>#TODO comments
                        </div>
                        <div class="single-post-content">
                            <p>
                                {!! $work->content !!}
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Blog Post -->
                @include('works._sideBar')
            </div>
        </div>
    </div>







@endsection
