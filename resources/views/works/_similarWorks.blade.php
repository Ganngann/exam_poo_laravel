{{--
Variables disponibles
- $works ARRAY(Work)
--}}

<div class="section">
    <div class="container">
        <div class="row">

            <div class="section-title">
                <h1>Similar Works</h1>
            </div>

            <ul class="grid cs-style-2">
                @foreach ($works as $work)
                    @include('works._card_3')
                @endforeach
            </ul>


        </div>
    </div>
</div>
