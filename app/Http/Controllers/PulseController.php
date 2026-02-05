<?php

namespace App\Http\Controllers;

use App\Models\Pulse;
use Illuminate\Http\Request;

class PulseController extends Controller
{
    public function index()
    {
        $pulses = Pulse::latest()->get();

        return view('home', ['pulses' => $pulses]);
    }
}
