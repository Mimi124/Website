<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\SliderDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\SliderCreateRequest;
use App\Http\Requests\Backend\SliderUpdateRequest;
use App\Models\Slider;
use App\Traits\FileUploadTrait;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class SliderController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(SliderDataTable $dataTable)
    {
        return $dataTable->render("layout.backend_layout.Menu.Slider.index");

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('layout.backend_layout.Menu.Slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SliderCreateRequest $request)
    {
        // Handle Image Upload

        $imagePath = $this->uploadImage($request, 'image');
        $slider = new Slider();
        $slider->image = $imagePath;
        $slider->title = $request->title;
        $slider->subtitle = $request->subtitle;
        $slider->description = $request->description;
        $slider->button_link = $request->button_link;
        $slider->status = $request->status;
        $slider->save();

        $notification = array(
            'message' => ' Slide Uploaded Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('slider.view')->with($notification);


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
        $slider = Slider::findOrFail($id);
        return view('layout.backend_layout.Menu.Slider.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SliderUpdateRequest $request, string $id): RedirectResponse
    {
        ///////////Image Update //////////////////////////////////
        $slider = Slider::findOrFail($id);

        /** Handle Image Upload */
        $imagePath = $this->uploadImage($request, 'image', $slider->image);

        $slider->image = !empty($imagePath) ? $imagePath : $slider->image;
        $slider->title = $request->title;
        $slider->subtitle = $request->subtitle;
        $slider->description = $request->description;
        $slider->button_link = $request->button_link;
        $slider->status = $request->status;
        $slider->save();

        $notification = array(
            'message' => ' Slide Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('slider.view')->with($notification);


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $slider = Slider::findOrFail($id);
        $this->removeImage($slider->image);
        $slider->delete();

        $notification = array(
            'message' => 'Slider Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
