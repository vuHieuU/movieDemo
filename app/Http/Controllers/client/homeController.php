<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\film;
use Illuminate\Http\Request;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $films = film::take(5)->get();
        $filmss = film::get();
        return view('client.layout.main',compact('films','filmss'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $film = film::findOrFail($id);
        $films = film::where('id', '!=' , $id)->take(4)->get();
        return view('client.detail',compact('film','films'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
