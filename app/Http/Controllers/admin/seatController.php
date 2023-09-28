<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\seat;
use Illuminate\Http\Request;

class seatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seat = seat::get();
        return view('admin.seat.index',compact('seat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.seat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'seat_number' => $request->seat_number,
        ];
        seat::create($data);
         return redirect('/seat/index');
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
        $seat = seat::findOrFail($id);
        return view('admin.seat.edit',compact('seat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $seat = seat::findOrFail($id);
        $dataUpdate = [
            'seat_number' => $request->seat_number,
        ];
        $seat->update($dataUpdate);
         return redirect('/seat/index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $seat = seat::findOrFail($id);
        $seat->delete($id);
        return redirect('/seat/index');
    }
}
