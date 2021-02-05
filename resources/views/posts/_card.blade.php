{{-- Variable disponible
- $post obj --}}
<!-- Blog Post Excerpt -->
<div class="col-sm-6">
    <div class="blog-post blog-single-post">
        <div class="single-post-title">
            <h2>{{ $post->title }}</h2>
        </div>

        <div class="single-post-image">
            <img src="{{ asset('assets/img/blog/' . $post->image) }}" alt="{{ $post->title }}">
        </div>

        <div class="single-post-info">
            <i class="glyphicon glyphicon-time"></i>{{ \Carbon\Carbon::parse($post->created_at)->format('d M, Y') }}
            {{-- <a href="#" title="Show Comments"><i class="glyphicon glyphicon-comment"></i>11 #TODO comments</a> --}}
        </div>

        <div class="single-post-content">
            <p>
                {!! Str::words($post->content, 100) !!}
            </p>
            <a href="{{ route('posts.show', ['post' => $post->id, 'slug' => Str::slug($post->title, '-')]) }}"
                class="btn">Read more</a>
        </div>
    </div>
</div>
<!-- End Blog Post Excerpt -->
