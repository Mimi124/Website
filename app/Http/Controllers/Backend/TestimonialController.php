<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\TestimonialDataTable;
use App\Http\Controllers\Controller;
use App\Models\SectionTitle;
use App\Models\Testimonial;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(TestimonialDataTable $dataTable) :  View|JsonResponse
    {
        $keys = ['testimonial_title', 'testimonial_subtitle'];
        $titles = SectionTitle::whereIn('key', $keys)->pluck('value','key');
        // dd($titles);
        return $dataTable->render('layout.backend_layout.Menu.Testimonial.index', compact('titles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
           return view('layout.backend_layout.Menu.Testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:200',
            'profession' => 'required|',
            'review' => 'required|',
            'show_at_home' => 'required',
            'status' => 'required',
            'image' => 'required'
        ],
        [
            'name.required' => ' Name Field Is Required',
            'image.required'=> 'Iamge Field is Required',
        ]
    );

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('upload/testimonial/'.$name_gen);
        $save_url = 'upload/testimonial/'.$name_gen;


        Testimonial::insert([
            'name' => $request->name,
            'profession' => $request->profession,
            'review' => $request->review,
            'show_at_home' => $request->show_at_home,
            'status' => $request->status,

            'image' => $save_url,
            'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Testimonial Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('testimonial.view')->with($notification);

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
        $testimonial = Testimonial::findOrFail($id);
        return view('layout.backend_layout.Menu.Testimonial.edit',compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $testimonial = Testimonial::findOrFail($id);
        $testimonial = $request->id;
        if($request->file('image')){

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('upload/testimonial/'.$name_gen);
        $save_url = 'upload/testimonial/'.$name_gen;

        Testimonial::findOrFail($testimonial)->update([
            'name' => $request->name,
            'profession' => $request->profession,
            'review' => $request->review,
            'show_at_home' => $request->show_at_home,
            'status' => $request->status,

            'image' => $save_url,
            'created_at' => Carbon::now(),

        ]);

         $notification = array(
            'message' => 'Testimonial Updated with Image Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('testimonial.view')->with($notification);

        } else{

            Testimonial::findOrFail($testimonial)->update([

                'name' => $request->name,
                'profession' => $request->profession,
                'review' => $request->review,
                'show_at_home' => $request->show_at_home,
                'status' => $request->status,
                'created_at' => Carbon::now(),

        ]);

         $notification = array(
            'message' => 'Testimonial Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('testimonial.view')->with($notification);

        } // End else Condition


    }


    public function updateTitle(Request $request){
        // dd($request->all());
        $request ->validate([
            'testimonial_title' => ['required','max:100'],
            'testimonial_subtitle' => ['required','max:255'],


        ]);

        SectionTitle::updateOrCreate(
            ['key' => 'testimonial_title'],
            ['value' => $request->testimonial_title]
        );

        SectionTitle::updateOrCreate(
            ['key' => 'testimonial_subtitle'],
            ['value' => $request->testimonial_subtitle]
        );


        $notification = array(
            'message' => 'Testimonial Title Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $img = $testimonial->image;
        unlink($img);

        Testimonial::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Testimonial Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }


}
