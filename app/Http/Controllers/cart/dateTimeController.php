<?php

namespace App\Http\Controllers\cart;

use App\Models\film;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class dateTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $id)
    {
        
        // $ticket = Auth::id();
        // $film_id = $request->input('id');
        $film = film::findOrFail($id);
        // dd($film_id);
        return view('client.cart.dateTime',compact('film'));
    }
}
