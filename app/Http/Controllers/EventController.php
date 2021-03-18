<?php

namespace App\Http\Controllers;

use App\EventPackage;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(Request $request, $slug)
    {
        $item = EventPackage::with(['galleries'])->where('slug', $slug)->firstOrFail();
        return view('pages.event',[
            'item' => $item
        ]);
    }
}
