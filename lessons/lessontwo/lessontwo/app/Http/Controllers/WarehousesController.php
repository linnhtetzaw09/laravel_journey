<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class WarehousesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $warehouses = Warehouse::all(); // Retrieve all statuses from the database
        return view('warehouses.index', compact('warehouses')); // Pass the $statuses variable to the view
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

        $warehouse = new Warehouse();
        $warehouse->name = $request['name'];
        $warehouse->slug =  Str::slug($request['name']);
        $warehouse->user_id = $user_id;

        $warehouse->save();

        return redirect(route('warehouses.index'));
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
        
        $warehouse = Warehouse::findOrFail($id);

        $warehouse->name = $request['name'];
        $warehouse->slug =  Str::slug($request['name']);
        $warehouse->user_id =$user_id;

        $warehouse->save();

        return redirect(route('warehouses.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $warehouse = Warehouse::findOrFail($id);
        $warehouse->delete();

        return redirect()->back();
    }
}
