<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;
use App\Models\film;
use App\Models\cinema;
use App\Models\hour;

class filmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $film = film::get();
        return view('admin.film.index',compact('film'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cate = category::get();
        $cinema = cinema::get();
        return view('admin.film.create',compact('cate','cinema'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('thumb')) {
            $thumb = $request->file('thumb')->getClientOriginalName();
            $request->file('thumb')->storeAs('public/images', $thumb);
        } else {
            $thumb = ''; 
        }
        $filmData = [
             'name' => $request->name,
             'thumb' => $thumb,
             'thoiLuongChieu' => $request->thoiLuongChieu,
             'ngayKhoiChieu' => $request->ngayKhoiChieu,
             'ngonNgu' => $request->ngonNgu,
             'trailer' => $request->trailer,
             'daoDien' => $request->daoDien,
             'dienVien' => $request->dienVien,
             'status' => $request->status,
             'content' => $request->content,
        ];
        $film = film::create($filmData);
        $film->categories()->attach($request->id_cate);
        $film->cinemas()->attach($request->id_cinema);
        return redirect('/film/index');
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
        $film = film::findOrFail($id);
        $cate = category::get();
        $cinema = cinema::get();
        return view('admin/film/edit',compact('film','cate','cinema'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $film = film::findOrFail($id);
        $filmData = [
            'name' => $request->name,
            'thoiLuongChieu' => $request->thoiLuongChieu,
            'ngayKhoiChieu' => $request->ngayKhoiChieu,
            'ngonNgu' => $request->ngonNgu,
            'trailer' => $request->trailer,
            'daoDien' => $request->daoDien,
            'dienVien' => $request->dienVien,
            'status' => $request->status,
            'content' => $request->content,
       ];
        if ($request->file('thumb') !== null) {
            $thumb = $request->file('thumb')->getClientOriginalName();
            $request->file('thumb')->storeAs('public/images', $thumb);
            $filmData['thumb'] = $thumb; 
        }
      
        $film->update($filmData);
        $film->categories()->sync($request->id_cate);
        $film->cinemas()->sync($request->id_cinema);
        return redirect('/film/index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $film = film::findOrFail($id);
        $film->delete($id);
        return redirect('film/index');
    }
}
