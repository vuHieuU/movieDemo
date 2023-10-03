<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TypeSeat;

class typeSeatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $type = TypeSeat::get();
        return view('admin.typeSeat.index',compact('type'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.typeSeat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'name' => $request->name,
            'price' => $request->price,
        ];
        TypeSeat::create($data);
        return redirect('/typeSeat/index');
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
        $type = TypeSeat::findOrFail($id);
        return view('admin.typeSeat.edit',compact('type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $type = TypeSeat::findOrFail($id);
        $data = [
            'name' => $request->name,
            'price' => $request->price,
        ];
        $type->update($data);
        return redirect('/typeSeat/index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $type = TypeSeat::findOrFail($id);
        $type->delete($id);
        return redirect('/typeSeat/index');
    }
}
