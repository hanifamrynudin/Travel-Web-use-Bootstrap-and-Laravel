<?php

namespace App\Http\Controllers;

use App\EventPackage;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = EventPackage::with(['galleries'])->get();
        return view('pages.home',[
            'items' => $items
        ]);
    }
}
