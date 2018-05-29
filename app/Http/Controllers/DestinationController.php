<?php

namespace App\Http\Controllers;

use App\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::all();
        return view('destination.index', compact('destinations'));
    }

    public function show(Destination $destination)
    {
        return view('destination.show', compact('destination'));
    }
}