<?php

namespace App\Http\Controllers\Client;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index()
    {
        return Inertia::render('Client/Order/Index', [
            'sidebar' => 'order'
        ]);
    }

    public function create()
    {
        return Inertia::render('Client/Order/Create', [
            'sidebar' => 'order'
        ]);
    }

    public function show()
    {
        return Inertia::render('Client/Order/Show', [
            'sidebar' => 'order'
        ]);
    }
}
