<?php

namespace App\Http\Controllers\Backend;

use App\Models\AboutSection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class AboutSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutSection = AboutSection::all();
        return view("backend.about_section.index", compact('aboutSection'));
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
        $inputData = $request->all();
        $homeSection = AboutSection::create($inputData);
        if ($homeSection) {
            return response()->json([
                'status' => 'success',
            ]);
        } else {
            Toastr::error('Something went wrong!', 'Error');
            return response()->json(['error' => 'Something went wrong'], 500);
        }
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}