{{-- Variables disponibles
- $works ARRAY(Work)
- $posts ARRAY(Post) --}}

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
                        $works = \App\Models\Work::orderBy('created_at', 'DESC')
                            ->take(6)
                            ->get();
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
                <div class="col-sm-4 featured-news">
                    <h2>Latest Blog Posts</h2>
                    @php
                        $posts = \App\Models\Post::orderBy('created_at', 'DESC')
                            ->take(3)
                            ->get();
                    @endphp
                    @each('posts._media_object', $posts, 'post')
                </div>
                <!-- End Featured News -->

                <!-- Latest News FB -->
                <div class="col-sm-4 latest-news">
                    <h2>Lastest Twitter News</h2>
                    <a class="twitter-timeline" data-theme="light" href="https://twitter.com/gannbe?ref_src=twsrc%5Etfw">
                        Tweets by gannbe
                    </a>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
                <div class="col-sm-4 latest-news">
                    <h2>Lastest FaceBook News</h2>
                    <div class="fb-page" data-href="https://www.facebook.com/biobombaye" data-tabs="timeline" data-width=""
                        data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
                        data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/biobombaye" class="fb-xfbml-parse-ignore"><a
                                href="https://www.facebook.com/biobombaye">Marché bio Bombaye</a></blockquote>
                    </div>
                </div>

                <!-- End Featured News -->
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v9.0&appId=254591571867363" nonce="IZrtAcpX">
    </script>
@endsection
