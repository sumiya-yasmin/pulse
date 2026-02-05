<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PulseController extends Controller
{
    public function index()
    {
        $pulses = [
    [
        'id' => 1,
        'date' => '2026-02-01',
        'mood' => 'calm',
        'energy' => 6,
        'title' => 'Quiet Saturday. Spent most of the day reading and organizing my thoughts.',
        'body' => 'Spent most of the day reading and organizing my thoughts. No rush, no noise.Finally made progress on the Laravel project. Things are starting to click.Finally made progress on the Laravel project. Things are starting to click.Finally made progress on the Laravel project. Things are starting to click.',
        'visibility' => 'private', 
        'tags' => ['reflection', 'rest'],
    ],
    [
        'id' => 2,
        'date' => '2026-02-02',
        'mood' => 'focused',
        'energy' => 8,
        'title' => 'Deep Work Session',
        'body' => 'Finally made progress on the Laravel project. Things are starting to click.Finally made progress on the Laravel project. Things are starting to click.Finally made progress on the Laravel project. Things are starting to click.Finally made progress on the Laravel project. Things are starting to click.',
        'visibility' => 'circle',
        'tags' => ['coding', 'learning'],
    ],
    [
        'id' => 3,
        'date' => '2026-02-03',
        'mood' => 'heavy',
        'energy' => 4,
        'title' => 'One of those days',
        'body' => 'Felt overwhelmed and unfocused. Took a walk instead of pushing through.Finally made progress on the Laravel project. Things are starting to click.Finally made progress on the Laravel project. Things are starting to click.Finally made progress on the Laravel project. Things are starting to click.Finally made progress on the Laravel project. Things are starting to click.Finally made progress on the Laravel project. Things are starting to click.',
        'visibility' => 'private',
        'tags' => ['mental-health'],
    ],
    [
        'id' => 4,
        'date' => '2026-02-01',
        'mood' => 'calm',
        'energy' => 6,
        'title' => 'Quiet Saturday',
        'body' => 'Spent most of the day reading and organizing my thoughts. No rush, no noise.Spent most of the day reading and organizing my thoughts. No rush, no noise.Spent most of the day reading and organizing my thoughts. No rush, no noise.Spent most of the day reading and organizing my thoughts. No rush, no noise.',
        'visibility' => 'private',
        'tags' => ['reflection', 'rest'],
    ],
    [
        'id' => 5,
        'date' => '2026-02-02',
        'mood' => 'focused',
        'energy' => 8,
        'title' => 'Deep Work Session',
        'body' => 'Finally made progress on the Laravel project. Things are starting to click.Finally made progress on the Laravel project. Things are starting to click.Finally made progress on the Laravel project. Things are starting to click.Finally made progress on the Laravel project. Things are starting to click.',
        'visibility' => 'circle',
        'tags' => ['coding', 'learning'],
    ],
    [
        'id' => 6,
        'date' => '2026-02-03',
        'mood' => 'heavy',
        'energy' => 4,
        'title' => 'One of those days',
        'body' => 'Felt overwhelmed and unfocused. Took a walk instead of pushing through.Finally made progress on the Laravel project. Things are starting to click.Finally made progress on the Laravel project. Things are starting to click.Finally made progress on the Laravel project. Things are starting to click.Finally made progress on the Laravel project. Things are starting to click.',
        'visibility' => 'private',
        'tags' => ['mental-health'],
    ],
];

        return view('home', ['pulses' => $pulses]);
    }
}
