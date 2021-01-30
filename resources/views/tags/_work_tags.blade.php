{{--
Variables disponibles:
- $tags ARRAY(Tag)
--}}

@foreach ($tags as $i => $tag)
{{ $tag->name }}<?php if ($i < count($tags) -1) { echo ', ';}?>
@endforeach
