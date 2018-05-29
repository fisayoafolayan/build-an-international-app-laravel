<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Auth;

class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin')->only(['index']);
    }

    public function index()
    {
        $bookings = Booking::with(['destination','user'])->get();
        return view('booking.index',compact('bookings'));
    }

    public function create(\App\Destination $destination)
    {
        return view('booking.create',compact('destination'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [ 
            'destination_id' => 'required|integer',  
            'number_of_tourists' => 'required|integer', 
            'visit_date' => 'required'
        ]);
        $validator->validate();
        $input = $request->only(['destination_id', 'number_of_tourists', 'visit_date']);
        $input['user_id'] = Auth::id();
        $input['visit_date'] = Carbon::createFromFormat('m/d/Y',$input['visit_date'])->toDateTimeString();

        $booking = Booking::create($input);
        return redirect('/home');
    }

    public function userPage()
    {
        $bookings = Auth::user()->bookings()->with('destination')->get();
        return view('booking.userpage', compact('bookings'));
    }
}
