<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //digabung atau terpisah sama saja
        // if(!auth()->check() || auth()->user()->username !== 'faiqathari'){
        //     abort(403); //forbidden
        // }// check() bernilai false kalau blm login, makanya pake !
        // if(auth()->guest() || auth()->user()->username != 'faiqathari'){
        //     abort(403); //forbidden
        // } cara kedua, guest() bernilai true kalau blm login
        // if(auth()->user()->username != 'faiqathari'){
        //     abort(403);
        // }
        // $this->authorize('admin'); contoh jika tes authorization pakai Gate, maka di routes/web gaperlu pake middleware
        return view('dashboard/categories/index', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
