{{--
Variables disponibles
- $posts ARRAY(Post)
--}}

{{-- Bouton more --}}
<div class="row mt-5">
    <div class="col text-center">
        <div class="block-27">
            <ul>
                <li><a href="#" id="posts_index_more" data-url="{{ route('posts.ajax.more') }}" data-limit="2">+</a>
                </li>
            </ul>
        </div>
    </div>
</div>
