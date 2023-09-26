<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\hour;
use Illuminate\Http\Request;

class hourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hour = hour::get();
        return view('admin.hour.index',compact('hour'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.hour.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'time' => $request->time, 
        ];
        hour::create($data);
        return redirect('/hour/index');
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
        $hour = hour::findOrFail($id);
        return view('admin.hour.edit',compact('hour'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $hour = hour::findOrFail($id);
        $dataUpdate = [
            'time' => $request->time, 
        ];
        $hour->update($dataUpdate);
        return redirect('/hour/index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hour = hour::findOrFail($id);
        $hour->delete($id);
        return redirect('/hour/index');
    }
}
