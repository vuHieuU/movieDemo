<?php

namespace App\Http\Controllers\admin;

use App\Models\film;
use App\Models\room;
use App\Models\showtimes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\hour;

class showTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $showTime = showtimes::get();
        return view('admin.showTime.index',compact('showTime'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $film = film::get();
        $room = room::get();
        $hour = hour::get();
        return view('admin.showTime.create',compact('film','room','hour'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'film_id' => $request->film_id,
            'room_id' => $request->room_id,
            'hour_id' => $request->hour_id,
            'day' => $request->day,
            'content' => $request->content,
        ];
        showtimes::create($data);
        return redirect('/showTime/index');
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
        $showTime = showtimes::findOrFail($id);
        $film = film::get();
        $room = room::get();
        $hour = hour::get();
        return view('admin.showTime.edit',compact('showTime','film','hour','room'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $showTime = showtimes::findOrFail($id);
        $dataUpdate = [
            'film_id' => $request->film_id,
            'room_id' => $request->room_id,
            'hour_id' => $request->hour_id,
            'day' => $request->day,
            'content' => $request->content,
        ];
        $showTime->update($dataUpdate);
        return redirect('/showTime/index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $showTime = showtimes::findOrFail($id);
        $showTime->delete($id);
        return redirect('/showTime/index');
    }
}
