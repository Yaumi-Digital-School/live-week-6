@extends('layout.base')

@section('content')
    @include('main.input_task')

    @include('main.undone_task')

    @include('main.done_task')
@endsection