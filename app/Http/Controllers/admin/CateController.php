<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;

class CateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cate = category::get();
        return view('admin/cate/index',compact('cate'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/cate/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cateData = [
            'name' => $request->name,
        ];
           category::insert($cateData);
           return redirect('/cate/index');
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
        $cate = category::findOrFail($id);
        return view('admin/cate/edit',compact('cate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cate = category::findOrFail($id);
        $cateUpdate = [
            'name' => $request->name,
        ];
          $cate->update($cateUpdate);
           return redirect('/cate/index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = category::findOrFail($id);
        $category->delete($id);
         return redirect('/cate/index');
    }
}
