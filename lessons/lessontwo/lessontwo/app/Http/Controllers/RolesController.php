<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all(); // Retrieve all roles from the database
        return view('roles.index', compact('roles')); // Pass the $roles variable to the view
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

    // Retrieve or set $status_id
    $status_id = $request->input('status_id'); // Option A: from the form
    // OR
    // $status_id = 1; // Option B: default value

    $role = new Role();
    $role->name = $request['name'];
    $role->slug = Str::slug($request['name']);
    $role->status_id = $status_id; // Assign $status_id to the role
    $role->user_id = $user_id;

    $role->save();

    return redirect(route('statuses.index'));
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
        
        $role = Role::findOrFail($id);

        $role->name = $request['name'];
        $role->slug =  Str::slug($request['name']);
        $role->user_id =$user_id;

        $role->save();

        return redirect(route('roles.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = Role::findOrFail($id);
        $role->delete();

        return redirect()->back();
    }
}
