<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\FactsDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\FactsCreateRequest;
use App\Http\Requests\Backend\FactsUpdateRequest;
use App\Models\Facts;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;

class FactsController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(FactsDataTable $dataTable)
    {
        return $dataTable->render("layout.backend_layout.Menu.Facts.index");

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layout.backend_layout.Menu.Facts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FactsCreateRequest $request)
    {
             // Handle Image Upload

             $imagePath = $this->uploadImage($request, 'image');
             $fact = new Facts();
             $fact->image = $imagePath;
             $fact->title = $request->title;
             $fact->subtitle = $request->subtitle;
             $fact->project_counter = $request->project_counter;
             $fact->staff_counter = $request->staff_counter;
             $fact->save();

             $notification = array(
                 'message' => ' Fact Uploaded Successfully',
                 'alert-type' => 'success'
             );

             return redirect()->route('fact.view')->with($notification);
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
        $fact = Facts::findOrFail($id);
        return view('layout.backend_layout.Menu.Facts.edit',compact('fact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FactsUpdateRequest $request, string $id)
    {
        $fact = Facts::findOrFail($id);

        /** Handle Image Upload */
        $imagePath = $this->uploadImage($request, 'image', $fact->image);

        $fact->image = !empty($imagePath) ? $imagePath : $fact->image;
        $fact->title = $request->title;
        $fact->subtitle = $request->subtitle;
        $fact->project_counter = $request->project_counter;
        $fact->staff_counter = $request->staff_counter;
        $fact->save();

        $notification = array(
            'message' => ' Facts Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('fact.view')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fact = Facts::findOrFail($id);
        $this->removeImage($fact->image);
        $fact->delete();

        $notification = array(
            'message' => 'Facts Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
