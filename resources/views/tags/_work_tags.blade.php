{{--
Variables disponibles:
- $tags ARRAY(Tag)
--}}
<?php $count = count($tags); ?>
@foreach ($tags as $i => $tag)
    {{ $tag->name }}
    <?php if ($i < $count - 1) { echo ', ' ; } ?>
@endforeach
