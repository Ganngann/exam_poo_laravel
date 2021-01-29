{{--
Variable disponible
- $post post
--}}
<div class="row">
    <div class="col-xs-4">
        <a href="{{ route('posts.show', ['post' => $post->id, 'slug' => Str::slug($post->title, '-')]) }}"><img src="{{ asset('assets/img/blog/' . $post->image) }}.jpg" alt="{{ $post->title }}" /></a>
    </div>
    <div class="col-xs-8">
        <div class="caption">
            <a href="{{ route('posts.show', ['post' => $post->id, 'slug' => Str::slug($post->title, '-')]) }}">{{ $post->title }}</a>
        </div>
        <div class="date">{{ \Carbon\Carbon::parse($post->created_at)->format('d M, Y') }}</div>
        <div class="intro">
            {{-- #TODO racourcir longueur du post --}}
            {!! $post->content !!}
            <a href="{{ route('posts.show', ['post' => $post->id, 'slug' => Str::slug($post->title, '-')]) }}">Read more...</a>
        </div>
    </div>
</div>
