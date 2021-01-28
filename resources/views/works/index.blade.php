{{--
Variables disponibles
- $works ARRAY(Work)
--}}
@extends('templates.page')

@section('title')
    Portfolio
@endsection

@section('scripts')
    {{-- <script src="{{ asset('assets/js/works/index.js') }}"></script>
    --}}
@endsection

@section('content')
    <div class="section">
        <div class="container">
            <div class="row">

                @include('works._list')

                <!-- Pagination -->
                <div class="pagination-wrapper ">
                    <ul class="pagination pagination-sm">
                        <li class="disabled"><a href="#">Previous</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
@endsection
