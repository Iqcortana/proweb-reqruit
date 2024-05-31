<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class add_admin extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.add_admin.index', [
            'add_admin' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.add_admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ], [
            'username.unique' => 'Username sudah digunakan, silakan pilih username lain.'
        ]);

        // Menghash password sebelum disimpan ke database
        $validatedData['password'] = Hash::make($request->password);

        User::create($validatedData);

        return redirect('/dashboard/add-admin')->with('success', 'Post has been created');

    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        // ga pake
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('dashboard.add_admin.edit', [
            'add_admin' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        User::where('id', $user->id)->update($validatedData);

        return redirect('/dashboard/add-admin')->with('updated', 'Post has been updated!');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);

        return redirect('/dashboard/add-admin')->with('deleted', 'Post has been deleted!');

    }

    public function showDashboard()
    {
        $user = User::all();
        return view('dashboard.layouts.header', compact('user'));
    }
}
