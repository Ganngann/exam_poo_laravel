{{-- Variable disponible
- $works array(work) --}}



<div class="section">
    <div class="container">
        <div class="row">
            <ul class="grid cs-style-2" id="moreBTNList">
                {{-- @each('works._card_4', $works, 'work') --}}
                @include('works._list_el')
            </ul>
        </div>
        <ul class="pager">
            <li>
                <a href="#" id="moreBTN" data-url="{{ route('works.ajax.more') }}" data-limit="6">More works</a>
            </li>
        </ul>
    </div>
</div>
