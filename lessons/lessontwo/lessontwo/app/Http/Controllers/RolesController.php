<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all(); // Retrieve all roles from the database
        $statuses = Status::whereIn('id',[3,4])->get();
        return view('roles.index', compact('roles','statuses')); // Pass the $roles variable to the view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $statuses = Status::whereIn('id',[3,4])->get();
        return view('roles.create', compact('statuses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $user = Auth::user();
    $user_id = $user->id;

    $role = new Role();
    $role->name = $request['name'];
    $role->slug = Str::slug($request['name']);
    $role->status_id = $request->input('status_id'); // Assign $status_id to the role
    $role->user_id = $user_id;

    // Single Image Updload

    if (file_exists($request['image'])){
        $file = $request['image'];
        // dd($file);
        $fname = $file->getClientOriginalName();
        // dd($fname);

        $imagnewename = uniqid($user_id).$user_id.$fname;
        // dd($imagnewename);  //"167331537a80431BG.jpg"

        $file->move(public_path('assets/img/roles/'),$imagnewename);

        $filepath = 'assets/img/roles/'. $imagnewename;
        $role->image = $filepath;

    } 

    $role->save();

    return redirect(route('roles.index'));
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $role = Role::findOrFail($id);
        return view('roles.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $role = Role::findOrFail($id);
        $statuses = Status::whereIn('id',[3,4])->get();
        return view('roles.edit')->with('role',$role)->with('statuses',$statuses);
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
        $role->status_id = $request['status_id'];
        $role->user_id =$user_id;

    // Remove Old Single Image 

    if($request->hasFile('image')){
        $path = $role->image;

        if(File::exists($path)){
            File::delete($path);
        }
    }

        // Single Image Updload

    if (file_exists($request['image'])){
        $file = $request['image'];
        // dd($file);
        $fname = $file->getClientOriginalName();
        // dd($fname);

        $imagnewename = uniqid($user_id).$user_id.$fname;
        // dd($imagnewename);  //"167331537a80431BG.jpg"

        $file->move(public_path('assets/img/roles/'),$imagnewename);

        $filepath = 'assets/img/roles/'. $imagnewename;
        $role->image = $filepath;

    } 

        $role->save();

        return redirect(route('roles.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = Role::findOrFail($id);

        // Remove old single image
        $path = $role->image;

        if(File::exists($path)){
            File::delete($path);
        }

        $role->delete();

        return redirect()->back();
    }
}
