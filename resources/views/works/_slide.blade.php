{{--
Variable disponible
- $works ARRAY(Work)
--}}
@php
$works = \App\Models\Work::where('inSlider', 1)->orderBy('created_at', 'DESC')->get()
@endphp
<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <ol class="carousel-indicators">
            @foreach ($works as $i => $work)
            <li data-target="#main-slider" data-slide-to="{{$i}}" <?php if ($i == 0) { echo 'class="active"' ; } ?>></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            {{-- <div class="item active" style="background-image: url(img/slides/1.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content centered">
                                <h2 class="animation animated-item-1">
                                    Welcome to BASICA! A Bootstrap3
                                    Template
                                </h2>
                                <p class="animation animated-item-2">
                                    Sed mattis enim in nulla blandit
                                    tincidunt. Phasellus vel sem
                                    convallis, mattis est id,
                                    interdum augue. Integer luctus
                                    massa in arcu euismod venenatis.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
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
