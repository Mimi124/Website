<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\GalleryDataTable;
use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\SectionTitle;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(GalleryDataTable $dataTable)
    {
        $keys =[ 'gallery_title','gallery_subtitle'];
        $titles = SectionTitle::Wherein('key', $keys)->pluck('value','key');
        // dd($titles['gallery_title']);
        return $dataTable->render("layout.backend_layout.Menu.Gallery.index", compact('titles'));

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('layout.backend_layout.Menu.Gallery.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'status'=> 'required',
            'image' => 'required','unique|galleries,image'
        ],
        [
            'image.required' => 'Image Field Is Required',
        ],
    );

        $image = $request->file('image');

        foreach ($image as $image) {

            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

            //save images in multi upload folder
             Image::make($image)->save('upload/gallery/'.$name_gen);
             $save_url = 'upload/gallery/'.$name_gen;

             Gallery::insert([
                'status' => $request->status,
                'image' => $save_url,
                'created_at' => Carbon::now(),

            ]);
         } // End of the foreach



        $notification = array(
            'message' => 'Image Uploaded Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('gallery.view')->with($notification);

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
        $gallery = Gallery::findOrFail($id);
        return view('layout.backend_layout.Menu.Gallery.edit',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $gallery = $request->id;
        if($request->file('image')){

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->save('upload/gallery/'.$name_gen);
        $save_url = 'upload/gallery/'.$name_gen;

        Gallery::findOrFail($gallery)->update([
            'status' => $request->status,
            'image' => $save_url,
            'created_at' => Carbon::now(),

        ]);

         $notification = array(
            'message' => 'Gallery Updated with Image Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('gallery.view')->with($notification);

        } else{

            Gallery::findOrFail($gallery)->update([

                'status' => $request->status,
                'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => ' Gallery Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('gallery.view')->with($notification);
    }

    }

    public function updateTitle(Request $request){
        // dd($request->all());
        $request ->validate([
            'gallery_title' => ['required','max:100'],
            'gallery_subtitle' => ['required','max:255']

        ]);

        SectionTitle::updateOrCreate(
            ['key' => 'gallery_title'],
            ['value' => $request->gallery_title]
        );

        SectionTitle::updateOrCreate(
            ['key' => 'gallery_subtitle'],
            ['value' => $request->gallery_subtitle]
        );


        $notification = array(
            'message' => 'Gallery Title Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);



    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gallery = Gallery::findOrFail($id);
        $img = $gallery->image;
        unlink($img);

        Gallery::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Image Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
