<?php

namespace App\Http\Controllers;

class HelloController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function services()
    {
        $services = [
            'Service 1',
            'Service 2',
            'Service 3',
            'Service 4',
        ];

        return view('services', compact('services'));
    }
}
