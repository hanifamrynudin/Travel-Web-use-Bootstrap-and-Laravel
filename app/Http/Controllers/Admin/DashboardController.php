<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\EventPackage;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view ('pages.admin.dashboard',[
            'event_package' => EventPackage::count()
        ]);
    }
}
