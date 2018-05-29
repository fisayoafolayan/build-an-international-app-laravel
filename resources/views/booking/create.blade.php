@extends('layouts.app')
@section('styles')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css">
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{__('Make a booking')}}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{$destination->image}}" class="img img-fluid">
                            <h2>{{$destination->name}}</h2>
                            <small>{{$destination->location}}</small>
                        </div>
                        <div class="col-md-6">
                            <form method="post" action="{{url('booking')}}">
                                @csrf
                                <input type="hidden" name="destination_id" value="{{$destination->id}}">
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="number_of_tourists">
                                            {{__('How many people are coming?')}}
                                        </label>
                                        <input id="number_of_tourists" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="number_of_tourists" value="{{ old('number_of_tourists') }}" required autofocus placeholder="{{__('e.g')}} 4">

                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('number_of_tourists') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="visit_date">
                                            {{__('When would you like to visit?')}}
                                        </label>
                                        <div class="input-group date" data-provide="datepicker">
                                            <input type="text" class="form-control datepicker" required autofocus placeholder="{{__('e.g')}} 01/26/2019" name="visit_date">
                                            <div class="input-group-addon">
                                                <span class="glyphicon glyphicon-th"></span>
                                            </div>
                                        </div>

                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('number_of_tourists') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Book Now') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js" defer>
    $(document).ready(function() {
        $('.datepicker').datepicker();
    });
</script>
@endsection