@extends('layouts.app')
@section('styles')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="container">
        <div class="row">
                <div class="col-md-12">
                        <img src="{{$destination->image}}" class="img img-fluid">
                        <h2>{{$destination->name}} <span class="float-right text-tiny">{{$destination->location}}</span></h2>
                        <hr/>
                        <p>{{$destination->translated_description}}</p>
                        <a href="{{url('booking/destination/'.$destination->id)}}">{{__('Book Now')}}</a>
                </div>
        </div>
</div>
@endsection