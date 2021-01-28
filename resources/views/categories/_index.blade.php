{{--
Variables disponibles
- $categories ARRAY(Categorie)
--}}

            @foreach($categories as $categorie)

            {{-- <li><a href="{{ route('categories.show', ['categorie' => $categorie->id, 'slug' => Str::slug($categorie->title, '-')]) }}">{{ $categorie->title }}</a></li> --}}
            <li><a href="#">{{ $categorie->name }}</a></li>

            @endforeach
