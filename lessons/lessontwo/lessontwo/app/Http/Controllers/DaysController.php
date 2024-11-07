<?php

namespace App\Http\Controllers;

use App\Models\Day;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class DaysController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $days = Day::all(); // Retrieve all statuses from the database
        return view('days.index', compact('days')); // Pass the $statuses variable to the view
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

        $day = new Day();
        $day->name = $request['name'];
        $day->slug =  Str::slug($request['name']);
        $day->user_id = $user_id;

        $day->save();

        return redirect(route('days.index'));
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
        
        $day = Day::findOrFail($id);

        $day->name = $request['name'];
        $day->slug =  Str::slug($request['name']);
        $day->user_id =$user_id;

        $day->save();

        return redirect(route('days.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $day = Day::findOrFail($id);
        $day->delete();

        return redirect()->back();
    }

}
