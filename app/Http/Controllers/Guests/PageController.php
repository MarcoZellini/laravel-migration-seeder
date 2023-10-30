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
        //dd(Train::whereDate('departure_date_time', '=', Carbon::today()->toDateString())->get());
        return view('trains', ['trains' => Train::whereDay('departure_date_time', '=', date('d'))->get()]);
    }
}
