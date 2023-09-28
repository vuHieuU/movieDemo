<?php

namespace App\Http\Controllers\admin;

use App\Models\day;
use App\Models\hour;
use App\Models\hourOfTheDay;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class dayHourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dayHour = hourOfTheDay::get();
        return view('admin.dayHour.index',compact('dayHour'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $day = day::get();
        $hour = hour::get();
        return view('admin.dayHour.create',compact('day','hour'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'hour_id' => $request->hour_id,
            'day_id' => $request->day_id,
        ];
        hourOfTheDay::create($data);
        return redirect('/dayHour/index');
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
        $dayHour = hourOfTheDay::findOrFail($id);
        $day = day::get();
        $hour = hour::get();
          return view('admin.dayHour.edit',compact('dayHour','day','hour'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dayHour = hourOfTheDay::findOrFail($id);
        $dataUpdate = [
            'hour_id' => $request->hour_id,
            'day_id' => $request->day_id,
        ];
        $dayHour->update($dataUpdate);
        return redirect('/dayHour/index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
