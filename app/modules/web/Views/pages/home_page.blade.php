@extends('web::layout.web_master')

@section('content')

    @if($data)
        {{$data->desc}}
    @endif
@stop