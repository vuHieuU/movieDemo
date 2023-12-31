<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\seat;
use App\Models\TypeSeat;
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
        $type = TypeSeat::with('typeSeats')->get();
        return view('admin.seat.create',compact('type'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'seat_number' => $request->seat_number,
            'typeSeat_id' => $request->typeSeat_id,
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
        $type = TypeSeat::get();
        return view('admin.seat.edit',compact('seat','type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $seat = seat::findOrFail($id);
        $dataUpdate = [
            'seat_number' => $request->seat_number,
            'typeSeat_id' => $request->typeSeat_id,
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
