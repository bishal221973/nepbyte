<?php

namespace App\Http\Controllers\Admin;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index()
    {
        return Inertia::render('Admin/Order/Index', [
            'sidebar' => 'order'
        ]);
    }

    public function serviceListing()
    {
        return Inertia::render('Admin/Order/ServiceListing', [
            'sidebar' => 'order'
        ]);
    }

    public function show()
    {
        return Inertia::render('Admin/Order/Show', [
            'sidebar' => 'order'
        ]);
    }
}
