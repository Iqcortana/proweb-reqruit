<?php

namespace App\Http\Controllers;

use App\Models\add_team;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AddTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.add_team.index', [
            'add_team' => add_team::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.add_team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'image|file',
            'name' => 'required|max:255',
            'job_position' => 'required'
        ]);

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('add-team-images');
        }

        add_team::create($validatedData);

        return redirect('/dashboard/add-team')->with('success', 'Post has been created');

    }

    /**
     * Display the specified resource.
     */
    public function show(add_team $add_team)
    {
        return view('dashboard.add_team.show', [
            'add_team' => $add_team
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(add_team $add_team)
    {
        return view('dashboard.add_team.edit', [
            'add_team' => $add_team
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, add_team $add_team)
    {
        $rules = [
            'image' => 'image|file',
            'name' => 'required|max:255',
            'job_position' => 'required'
        ];

        $validatedData = $request->validate($rules);

        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        add_team::where('id', $add_team->id)->update($validatedData);

        return redirect('/dashboard/add-team')->with('updated', 'Post has been updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(add_team $add_team)
    {
        if($add_team->image) {
            Storage::delete($add_team->image);
        }
        add_team::destroy($add_team->id);

        return redirect('/dashboard/add-team')->with('deleted', 'Post has been deleted!');
    }

    public function home()
    {
        return view('home', [
            'add_team' => add_team::all()
        ]);
    }
}
