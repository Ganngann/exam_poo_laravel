{{--
Variables disponibles
- $works ARRAY(Work)
- $posts ARRAY(Post)
--}}

@extends('templates.index')

@section('title')
    Home
@endsection



@section('content')

    @include('works._slide')


    <!--/#main-slider-->

    <!-- Our Portfolio -->

    <div class="section section-white">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h1>Our Recent Works</h1>
                </div>

                <ul class="grid cs-style-3">
                    @php
                    $works = \App\Models\Work::orderBy('created_at', 'DESC')->take(6)->get()
                    @endphp
                    @each('works._card_4', $works, 'work')
                </ul>
            </div>
        </div>
    </div>
    <!-- Our Portfolio -->

    <hr />
    <!-- Our Articles -->
    <div class="section">
        <div class="container">
            <div class="row">
                <!-- Featured News -->
                <div class="col-sm-6 featured-news">
                    <h2>Latest Blog Posts</h2>
                    @php
                    $posts = \App\Models\Post::orderBy('created_at', 'DESC')->take(3)->get()
                    @endphp
                    @each('posts._media_object', $posts, 'post')
                    {{-- @each('posts._recent', $posts, 'post')
                    --}}

                </div>
                <!-- End Featured News -->

                <!-- Latest News FB -->
                <div class="col-sm-6 latest-news">
                    <h2>Lastest FaceBook/Twitter News</h2>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="caption">
                                <a href="full-width.html">Donec elementum mi vitae enim
                                    fermentum lobortis.</a>
                            </div>
                            <div class="date">16 May 2013</div>
                            <div class="intro">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et.
                                <a href="full-width.html">Read more...</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="caption">
                                <a href="full-width.html">In hac habitasse platea
                                    dictumst.</a>
                            </div>
                            <div class="date">14 May 2013</div>
                            <div class="intro">
                                Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat.
                                <a href="full-width.html">Read more...</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="caption">
                                <a href="full-width.html">
                                    Nam condimentum laoreet sagittis.</a>
                            </div>
                            <div class="date">14 May 2013</div>
                            <div class="intro">
                                Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat.
                                <a href="full-width.html">Read more...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Featured News -->
            </div>
        </div>
    </div>
@endsection
