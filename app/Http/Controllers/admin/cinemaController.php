<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cinema;
use App\Models\country;
class cinemaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cinema = cinema::with('country')->get();
        return view('admin.cinema.index',compact('cinema'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $country = country::get();
        return view('admin.cinema.create',compact('country'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'name' => $request->name,
            'address' => $request->address,
            'description' => $request->description,
            'country_id' => $request->country_id,
        ];
        cinema::create($data);
        return redirect('/cinema/index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cinema = cinema::findOrFail($id);
        $country = country::get();
        return view('admin.cinema.edit',compact('cinema','country'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cinema = cinema::findOrFail($id);
        $Updatedata = [
            'name' => $request->name,
            'address' => $request->address,
            'description' => $request->description,
            'country_id' => $request->country_id,
        ];
        $cinema->update($Updatedata);
        return redirect('/cinema/index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cinema = cinema::findOrFail($id);
        $cinema->detele($id);
        return redirect('/cinema/index');
    }
}
