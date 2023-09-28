<?php

namespace App\Http\Controllers\admin;

use App\Models\day;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class dayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $day = day::get();
        return view('admin.day.index',compact('day'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.day.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'day' => $request->day, 
        ];
        day::create($data);
        return redirect('/day/index');
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
        $day = day::findOrFail($id);
        return view('admin.day.edit',compact('day'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $day = day::findOrFail($id);
        $dataUpdate = [
            'day' => $request->day, 
        ];
        $day->update($dataUpdate);
        return redirect('/day/index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $day = day::findOrFail($id);
        $day->delete($id);
        return redirect('/day/index');
    }
}
