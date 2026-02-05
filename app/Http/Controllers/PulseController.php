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

    public function create()
    {
        return view('pulses.create');
    }
    public function store(Request $request)
    {
       $data = $request->validate([
        'title' => 'required|min:3|max:255',
        'body' => 'required|min:10',
        'mood' => 'required|min:50',
        'energy' => 'required|integer|min:1|max:10'

       ]);
       \App\Models\Pulse::create($data + ['user_id'=>1]);
       return redirect('/')->with('success', 'Pulse saved!');
    }

}
