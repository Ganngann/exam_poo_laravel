{{--
Variables disponibles
- $posts ARRAY(Post)
--}}

            @foreach($posts as $post)

            <li><a href="{{ route('posts.show', ['post' => $post->id, 'slug' => Str::slug($post->title, '-')]) }}">{{ $post->title }}</a></li>

            @endforeach
