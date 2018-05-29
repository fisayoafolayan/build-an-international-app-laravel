@extends('layouts.app')
@section('styles')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="container">
        <div class="row">
                @foreach($destinations as $destination)
                <div class="col-md-4">
                        <img src="{{$destination->image}}" class="img img-fluid">
                        <h2>{{$destination->name}} <span class="float-right text-tiny">{{$destination->location}}</span></h2>
                        <hr/>
                        <a href="{{url(app()->getLocale().'/destinations/'.$destination->id)}}">{{__('View More')}}</a>
                </div>
                @endforeach
        </div>
</div>
@endsection