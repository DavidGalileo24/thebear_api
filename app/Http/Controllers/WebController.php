<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class WebController extends Controller
{
    public function doc()
    {
        return Inertia::render('Web/Doc', [
            'data' => 'Hi!',
        ]);
    }
}
