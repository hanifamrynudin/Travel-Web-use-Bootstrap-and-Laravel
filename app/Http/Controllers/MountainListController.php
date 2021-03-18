<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MountainListController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.mountain-list');
    }
}
