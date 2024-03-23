<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\HomeSectionRequest;
use App\Models\HomeSection;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class HomeSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $HomeSection = HomeSection::latest()->get();
        return view('backend.home_section.index', compact('HomeSection'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.home_section.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HomeSectionRequest $request)
    {
        $inputData = $request->all();
        $homeSection = HomeSection::create($inputData);
        if ($homeSection) {
            Toastr::success('Created successful!', 'Success');
            return redirect()->route('home-section.index');
        } else {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back()->withInput();
        }
    }

    public function storeAjax(HomeSectionRequest $request)
    {
        $inputData = $request->all();
        $homeSection = HomeSection::create($inputData);
        if ($homeSection) {
            return response()->json([
                'status' => 'success',
            ]);
        } else {
            Toastr::error('Something went wrong!', 'Error');
            return response()->json(['error' => 'Something went wrong'], 500);
        }
    }

    public function updateAjax(Request $request)
    {
        $inputData = $request->all();
        $homeSection = HomeSection::find($inputData['id']);
        $homeSection->update($inputData);
        return response()->json([
            'status' => 'success',
        ]);
    }

    public function deleteAjax($id)
    {
        $homeSection = HomeSection::find($id);

        if ($homeSection) {
            $homeSection->delete();
            return response()->json([
                'status' => 'success',
            ], 200);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Id not found',
        ], 404);
    }

    public function statusChangeAjax(Request $request, $id)
    {
        $HomeSection = HomeSection::find($id);
        $HomeSection->status = $request->status;
        $HomeSection->save();
        return response()->json([
            'status' => 'success',
        ]);
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
