@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if(empty($bookings))
                    <h3>{{__('You do not have any reservations')}}</h3>
                    @else
                    @foreach($bookings as $booking)
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{$booking->destination->image}}" class="img img-fluid">
                                <h2>{{$booking->destination->name}}</h2>
                                <small>{{$booking->destination->location}}</small>
                            </div>
                            <div class="col-md-6">
                                <h5>{{__('Number of tourists')}}: <br/><strong>{{$booking->number_of_tourists}}</strong></h5>
                                <h5>{{__('Tour date')}}: <br/><strong>{{$booking->visit_date->toDateString()}}</strong></h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection