{{--
Variables disponibles
- $posts ARRAY(Post)
--}}
@extends('templates.index')

@section('hero')
    <!-- Page Title -->
    <div class="section section-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>
                        @yield('title')
                    </h1>
                </div>
            </div>
        </div>
    </div>
@endsection
