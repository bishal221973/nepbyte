<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Milon\Barcode\DNS1D;
use Illuminate\Http\Request;

class ClientDashboardController extends Controller
{
    public function dashboard(){
        $barcodeGenerator = new DNS1D();
        return Inertia::render('Client/Dashboard',[
            'barcode' => $barcodeGenerator->getBarcodePNG(auth()->user()->name, 'C39+', 3, 33),
            'sidebar'=>'dashboard'
        ]);
    }
}
