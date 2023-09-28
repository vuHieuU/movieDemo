<?php

namespace App\Http\Controllers\admin;

use App\Models\room;
use App\Models\seat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class roomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $room = room::get();
        return view('admin.room.index',compact('room'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $seats = seat::get();
        return view('admin.room.create',compact('seats'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'name' => $request->name,
            'max'  => $request->max,
            'acreage'  => $request->acreage,
            'content'  => $request->content,
        ];
        $room = room::create($data);
        $room->seats()->attach($request->id_seat);
        return redirect('/room/index');
        
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
        $room = room::findOrFail($id);
        $seats = seat::get();
        return view('admin.room.edit',compact('room','seats'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $room = room::findOrFail($id);
        $dataUpdate = [
            'name' => $request->name,
            'max'  => $request->max,
            'acreage'  => $request->acreage,
            'content'  => $request->content,
        ];
        $room->update($dataUpdate);
        $room->seats()->sync($request->id_seat);
        return redirect('/room/index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $room = room::findOrFail($id);
        $room->delete($id);
        return redirect('/room/index');
    }
}
