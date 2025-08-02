<?php

namespace App\Http\Controllers;

use App\Models\LastOffer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $lastOffers = LastOffer::latest()->take(3)->get();
        return view('Home', compact('lastOffers'));
    }
}
