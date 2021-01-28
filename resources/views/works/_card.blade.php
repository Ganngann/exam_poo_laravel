{{--
Variable disponible
- $work obj
--}}
<!-- Blog Post Excerpt -->
<div class="col-sm-6">
    <div class="blog-post blog-single-post">
        <div class="single-post-title">
            <h2>{{ $work->title }}</h2>
        </div>

        <div class="single-post-image">
            <img src="{{ asset('assets/img/blog/' . $work->image) }}.jpg" alt="{{ $work->title }}">
        </div>

        <div class="single-post-info">
            <i class="glyphicon glyphicon-time"></i>{{ \Carbon\Carbon::parse($work->created_at)->format('d M, Y') }} <a
                href="#" title="Show Comments"><i class="glyphicon glyphicon-comment"></i>11 #TODO comments</a>
        </div>

        <div class="single-post-content">
            <p>
                {{ $work->content }}
            </p>
            <a href="{{ route('works.show', ['work' => $work->id, 'slug' => Str::slug($work->title, '-')]) }}"
                class="btn">Read more</a>
        </div>
    </div>
</div>
<!-- End Blog Post Excerpt -->
