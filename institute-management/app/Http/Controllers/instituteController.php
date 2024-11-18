<?php

namespace App\Http\Controllers;

use App\Models\branch;
use App\Models\institute;
use Illuminate\Http\Request;

class instituteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $institute = institute::with('branch')->get();
        return view('institute.index',compact('institute')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        $branch = branch::all();
        return view('institute.create',compact('branches'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'inst_name' => 'required|string|max:45',
            'location' => 'required|string',
            'contact_number' => 'required|string|max:45',
            'branch_branch_id' => 'reqired|exists:branches,branch_id',
        ]);

        $location = json_encode([
            'lat' => $request->latitude,
            'lng' => $request->longitude
        ]);

        institute::create([
            'inst_name' => $request->inst_name,
            'location' => $location,
            'contact_number' => $request->contact_number,
            'branch_branch_id' => $request->branch_branch_id,
        ]);

        return redirect()->route('institute.index')->with('success','Institute create successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(institute $institute)
    {
        return view('institute.show',compact('institute'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(institute  $institute)
    {
        $brach = branch::all();
        $location = json_decode($institute->location,true);
        return view('institute.edit',compact('institute','branch','location'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, institute $institute)
    {
        $request->validate([
            'inst_name' => 'required|string|max:45',
            'location' => 'required|string|max:45',
            'contact_number' => 'required|string|max:45',
            'brach_branch_id' => 'required|exists:branch.branch_id',
            ]);

            $location = json_encode([
                'lat' => $request->latitude,
                'lng' => $request->longitude,
            ]);

            $institute->update([
                'inst_name' => $request->inst_name,
                'location' => $location,
                'contact_number' => $request->contact_number,
                'branch_branch_id' => $request->branch_branch_id,
            ]);

            return redirect()->route('institute,index')->with('success','Institute update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(institute $institute)
    {
        $institute->delete();
        return redirect()->route('institute.index')->with('success','Institute deleted successfully..');
    }
}