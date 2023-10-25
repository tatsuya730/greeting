<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function morning()
    {
        return view('morning', ['greeting' => 'おはようございます']);
    }

    public function afternoon()
    {
        return view('afternoon', ['greeting' => 'こんにちは']);
    }

    public function evening()
    {
        return view('evening', ['greeting' => 'こんばんは']);
    }

    public function night()
    {
        return view('night', ['greeting' => 'おやすみ']);
    }

    public function freeword($word)
    {
        return view('freeword', ['message' => $word]);
    }

    public function random()
    {
        $greetings = ['おはよう', 'こんにちは', 'こんばんは', 'おやすみ'];
        $greeting = $greetings[array_rand($greetings)];
        return view('random', ['greeting' => $greeting]);
    }
}
