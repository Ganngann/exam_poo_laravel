{{--
Variables disponibles
- $work Work
--}}
@extends('templates.page')

@section('title')
    PORTFOLIO - {{ $work->title }}
@endsection

@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                <!-- Product Image & Available Colors -->
                <div class="col-sm-6">
                    <div class="product-image-large">
                        <img src="{{ asset('assets/img/portfolio/' . $work->image) }}" alt="{{ $work->title }}">
                    </div>
                    <div class="colors">
                        <span class="color-white"></span>
                        <span class="color-black"></span>
                        <span class="color-blue"></span>
                        <span class="color-orange"></span>
                        <span class="color-green"></span>
                    </div>
                </div>
                <!-- End Product Image & Available Colors -->
                <!-- Product Summary & Options -->
                <div class="col-sm-6 product-details">
                    <h2>{{ $work->title }}</h2>
                    <h3> id = {{ $work->id }}</h3>
                    <p>
                        {!! $work->content !!}
                    </p>
                    <h3>Project Details</h3>
                    <p><strong>Client: </strong>{{ $work->client->name }}</p>
                    <p><strong>Date: </strong>{{ \Carbon\Carbon::parse($work->created_at)->format('F d, Y') }}</p>
                    <p><strong>Tags: </strong>@include('tags._work_tags', ['tags' => $work->tags]).</p>
                </div>
                <!-- End Product Summary & Options -->

            </div>
        </div>
    </div>

    <hr>

    @include('works._similarWorks', ['works' => \App\Models\Work::whereHas('tags', function ($q) use ($work) {
    return $q->whereIn('name', $work->tags->pluck('name'));
    })
    ->where('id', '!=', $work->id) // So you won't fetch same post
    ->take(4)
    ->get()])


@endsection
