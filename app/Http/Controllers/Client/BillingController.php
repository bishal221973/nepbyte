<?php

namespace App\Http\Controllers\Client;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BillingController extends Controller
{
    public function index()
    {
        return Inertia::render('Client/Billing/Index', [
            'sidebar' => 'billing'
        ]);
    }
}
