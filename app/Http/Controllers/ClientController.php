<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ClientController extends Controller
{
    public function index(){
        return Inertia::render('Admin/Client/Index',[
            'sidebar'=>'client'
        ]);
    }

    public function create()
    {
        return Inertia::render('Admin/Client/Create',[
            'sidebar' => 'client'
        ]);
    }

    public function show()
    {
        return Inertia::render('Admin/Client/Show',[
            'menu'=>'generalClient',
            'sidebar' => 'client'
        ]);
    }

    public function security()
    {
        return Inertia::render('Admin/Client/Security',[
            'menu' => 'securityClient',
            'sidebar' => 'client'
        ]);
    }

    public function orders()
    {
        return Inertia::render('Admin/Client/Orders', [
            'menu' => 'ordersClient',
            'sidebar' => 'client'
        ]);
    }

    public function paymentHistory()
    {
        return Inertia::render('Admin/Client/PaymentHistory', [
            'menu' => 'paymentHistoryClient',
            'sidebar' => 'client'
        ]);
    }

    public function logs()
    {
        return Inertia::render('Admin/Client/Logs', [
            'menu' => 'logsClient'
        ]);
    }
}
