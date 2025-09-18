<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function index()
    {
        return Inertia::render('Admin/Vendor/Index', [
            'sidebar' => 'vendor'
        ]);
    }

    public function create()
    {
        return Inertia::render('Admin/Vendor/Create', [
            'sidebar' => 'vendor'
        ]);
    }

    public function show()
    {
        return Inertia::render('Admin/Vendor/Show', [
            'menu' => 'generalClient',
            'sidebar' => 'vendor'
        ]);
    }

    public function security()
    {
        return Inertia::render('Admin/Vendor/Security', [
            'menu' => 'securityClient',
            'sidebar' => 'vendor'
        ]);
    }

    public function orders()
    {
        return Inertia::render('Admin/Vendor/Orders', [
            'menu' => 'ordersClient',
            'sidebar' => 'vendor'
        ]);
    }

    public function paymentHistory()
    {
        return Inertia::render('Admin/Vendor/PaymentHistory', [
            'menu' => 'paymentHistoryClient',
            'sidebar' => 'vendor'
        ]);
    }

    public function logs()
    {
        return Inertia::render('Admin/Vendor/Logs', [
            'menu' => 'logsClient'
        ]);
    }
}
