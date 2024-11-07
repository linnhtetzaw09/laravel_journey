<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class GendersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genders = Gender::all(); // Retrieve all statuses from the database
        return view('genders.index', compact('genders')); // Pass the $statuses variable to the view
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

        $user = Auth::user();
        $user_id = $user->id;

        $gender = new Gender();
        $gender->name = $request['name'];
        $gender->slug =  Str::slug($request['name']);
        $gender->user_id = $user_id;

        $gender->save();

        return redirect(route('genders.index'));
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = Auth::user();
        $user_id = $user->id;
        
        $gender = Gender::findOrFail($id);

        $gender->name = $request['name'];
        $gender->slug =  Str::slug($request['name']);
        $gender->user_id =$user_id;

        $gender->save();

        return redirect(route('genders.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gender = Gender::findOrFail($id);
        $gender->delete();

        return redirect()->back();
    }
}
