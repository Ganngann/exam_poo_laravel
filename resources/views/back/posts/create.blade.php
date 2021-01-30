@extends('back.templates.dashboard')
{{-- @extends('layouts.app') --}}


@section('content')
    coucou

    {!! Form::open(['action' => 'App\Http\Controllers\PostController@store', 'method' => 'POST']) !!}

    {{-- <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::label('title', ['class' => 'form-control', 'placeholder' => 'Title']) }}
    </div> --}}
    {{-- <div class="form-group">
        {{ Form::label('body', 'Body') }}
        {{ Form::textarea('body', ['class' => 'form-control', 'placeholder' => 'Body']) }}
    </div> --}}

    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title','title') }}
    </div>
    <div class="form-group">
        {{ Form::label('body', 'Body') }}
        {{ Form::textarea('body') }}
    </div>




    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}


@endsection
