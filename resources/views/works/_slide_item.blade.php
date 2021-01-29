{{--
Variable disponible
- $work obj
--}}


<div class="item {{ $key == 0 ? 'active' : '' }}" style="background-image: url({{ asset('assets/img/portfolio/' . $work->image) }}.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="carousel-content centered">
                    <h2 class="animation animated-item-1">
                        {{ $work->title }}
                    </h2>
                    <p class="animation animated-item-2">
                        {!! $work->content !!}
                    </p>
                    <br />
                    <a class="btn btn-md animation animated-item-3"
                        href="{{ route('works.show', ['work' => $work->id, 'slug' => Str::slug($work->title, '-')]) }}">Learn
                        More</a>
                </div>
            </div>
        </div>
    </div>
</div>
