{{--
Variable disponible
- $works array(work)
--}}


<div class="section">
    <div class="container">
        <div class="row">

    <ul class="grid cs-style-2">
        @each('works._card_4', $works, 'work')


    </ul>


        </div>

        <ul class="pager">
          <li><a href="#">More works</a></li>
        </ul>

    </div>
</div>
