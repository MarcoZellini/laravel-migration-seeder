<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function trains()
    {
        return view('trains', ['trains' => Train::all()]);
    }
}
