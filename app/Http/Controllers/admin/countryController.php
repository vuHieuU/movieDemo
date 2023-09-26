<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\country;

class countryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $country = country::get();
        return view('admin/country/index',compact('country'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/country/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $countryData = [
            'name' => $request->name,
        ];
           country::insert($countryData);
           return redirect('/country/index');
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
        $country = country::findOrFail($id);
        return view('admin/country/edit',compact('country'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $country = country::findOrFail($id);
        $countryUpdate = [
            'name' => $request->name,
        ];
          $country->update($countryUpdate);
           return redirect('/country/index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $country = country::findOrFail($id);
          $country->delete($id);
           return redirect('/country/index');
    }
}
