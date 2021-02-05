{{--
Variable disponible
- $works ARRAY(Work)
--}}


@php
$works = \App\Models\Work::where('inSlider', 1)->orderBy('created_at', 'DESC')->take(4)->get()
@endphp


<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <ol class="carousel-indicators">
            @foreach ($works as $i => $work)
            <li data-target="#main-slider" data-slide-to="{{$i}}" <?php if ($i == 0) { echo 'class="active"' ; } ?>></li>
            @endforeach
        </ol>
        <div class="carousel-inner">

            <!--/.item-->
            @each('works._slide_item', $works, 'work')

        </div>
        <!--/.carousel-inner-->
    </div>
    <!--/.carousel-->
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
        <i class="icon-angle-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
        <i class="icon-angle-right"></i>
    </a>
</section>
