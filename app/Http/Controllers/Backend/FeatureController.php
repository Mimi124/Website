<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\FeaturesDataTable;
use App\DataTables\SliderDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\FeatureCreateRequest;
use App\Http\Requests\Backend\FeatureUpdateRequest;
use App\Models\Features;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FeaturesDataTable $dataTable)
    {
        //
        return $dataTable->render('layout.backend_layout.Menu.Feature.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('layout.backend_layout.Menu.Feature.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FeatureCreateRequest $request) : RedirectResponse
    {
        // dd($request->all());

        Features::create($request->validated());

        $notification = array(
            'message' => ' Feature Uploaded Successfully',
            'alert-type' => 'success'
        );

        return to_route('feature.view')->with($notification);


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
        $feature = Features::findOrFail($id);
        return view('layout.backend_layout.Menu.Feature.edit', compact('feature'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(FeatureUpdateRequest $request, string $id)
    {

        $feature = Features::findOrFail($id);
        $feature->update($request->validated());

        $notification = array(
            'message' => ' Feature Updated Successfully',
            'alert-type' => 'success'
        );

        return to_route('feature.view')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $feature = Features::findOrFail($id);
        $feature->delete();

        $notification = array(
            'message' => 'Feature Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
