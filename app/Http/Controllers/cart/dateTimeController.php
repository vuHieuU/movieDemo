<?php

namespace App\Http\Controllers\cart;

use App\Models\film;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\showtimes;
use Illuminate\Support\Facades\Auth;

class dateTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $id)
    {
        $film = film::findOrFail($id);
        $showtimes = $film->showtimes;
        return view('client.cart.dateTime',compact('film','showtimes'));
    }
    public function room(Request $request, $id)
    {
        $film = film::findOrFail($id);
        $showtimes = $film->showtimes;
       return view('client.cart.Room',compact('film','showtimes'));
    }
}
