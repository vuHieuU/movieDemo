<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::get();
        return view('admin.users.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $role = Role::all()->groupBy('group');
        return view('admin.users.create',compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usersCreate = $request->all();
        $usersCreate['password'] = Hash::make($request->password);
        $user = User::create($usersCreate);
        $user->roles()->attach($usersCreate['role_ids'] ?? []);
        return redirect('user/index');
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
        $user = User::FindOrFail($id);
        $role = Role::all()->groupBy('group');
        return view('admin.users.edit',compact('user','role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $userUpdate = $request->except('password');
        $user = User::FindOrFail($id);
        if($request->password){
             $userUpdate['password'] = Hash::make($request->password);
        }
        $user->update($userUpdate);
        $user->roles()->sync($userUpdate['role_ids'] ?? []);
        return redirect('user/index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::FindOrFail($id);
        $user->delete($id);
        return redirect('user/index');
    }
}
