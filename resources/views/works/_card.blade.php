{{--
Variable disponible
- $work obj
--}}


<figure>
    <img src="{{ asset('assets/img/portfolio/' . $work->image) }}.jpg" alt="{{ $work->title }}">
    <figcaption>
        <h3>{{ $work->title }}</h3>
        <span>{{ $work->client->name }}</span>
        <a href="{{ route('works.show', ['work' => $work->id, 'slug' => Str::slug($work->title, '-')]) }}">Take a
            look</a>
    </figcaption>
</figure>
