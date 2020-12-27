<?php

namespace App\Http\Controllers;

class ServiceController extends Controller
{
    public function index()
    {
        // Model -singular, capitalized
        // Service

        // Table- plural, lowercase
        // services

        $services = \App\Service::all();

        return view('service.index', compact('services'));
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required|min:5',
        ]);

        \App\Service::create($data);

        return redirect()->back();
    }
}
