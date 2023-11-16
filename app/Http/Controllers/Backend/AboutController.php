<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\AboutDataTable;
use App\Models\About;
use App\Models\SectionTitle;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(AboutDataTable $dataTable)
    {
        $keys =[ 'about_title','about_subtitle','mission_title','mandate_title','arrangement_title','core_value_title','chief_title'];
        $titles = SectionTitle::Wherein('key', $keys)->pluck('value','key');
// dd($titles);

        return $dataTable->render("layout.backend_layout.Menu.About.index", compact('titles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('layout.backend_layout.Menu.About.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'description' => 'required',
            'sub_description' => 'required|',
            'mandate_description' => 'required|',
            'arrangement_description' => 'required',
            'mandate_sub' => 'required',
            'mandate_point'=> 'required',
            'mandate_last'=> 'required',
            'mission_description'=> 'required',
            'chief_description'=> 'required',
            'value_1'=> 'required',
            'value_2'=> 'required',
            'value_3'=> 'required',
            'value_4'=> 'required',
            'value_5'=> 'required',
            'value_6'=> 'required',
            'about_image' => 'required',
            'arrangement_image'=> 'required',
        ],

    );
    $image = $request->file('about_image');
    $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    Image::make($image)->save('upload/about/'.$name_gen);
    $save_url = 'upload/about/'.$name_gen;

    $image = $request->file('arrangement_image');
    $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    Image::make($image)->save('upload/about/'.$name_gen);
    $save_path = 'upload/about/'.$name_gen;


    About::insert([
        'description' => $request->description,
        'sub_description' => $request->sub_description,
        'mandate_description' => $request->mandate_description,
        'arrangement_description' => $request->arrangement_description,
        'mandate_sub' => $request->mandate_sub,
        'mandate_point'=> $request->mandate_point,
        'mandate_last'=> $request->mandate_last,
        'mission_description'=> $request->mission_description,
        'chief_description'=> $request->chief_description,
        'value_1'=> $request->value_1,
        'value_2'=> $request->value_2,
        'value_3'=> $request->value_3,
        'value_4'=> $request->value_4,
        'value_5'=> $request->value_5,
        'value_6'=> $request->value_6,

        'about_image' => $save_url,
        'arrangement_image' => $save_path,
        'created_at' => Carbon::now(),

    ]);

    $notification = array(
        'message' => 'About Page Added Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('about.view')->with($notification);



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
        $about = About::findOrFail($id);
        return view('layout.backend_layout.Menu.About.edit',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $about = $request->id;


     if($request->file('about_image') || $request->file('arrangement_image')){

    $image = $request->file('about_image');
    $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    Image::make($image)->save('upload/about/'.$name_gen);
    $save_url = 'upload/about/'.$name_gen;

    $image = $request->file('arrangement_image');
    $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    Image::make($image)->save('upload/about/'.$name_gen);
    $save_path = 'upload/about/'.$name_gen;

    About::findOrFail($about)->update([
        'description' => $request->description,
        'sub_description' => $request->sub_description,
        'mandate_description' => $request->mandate_description,
        'arrangement_description' => $request->arrangement_description,
        'mandate_sub' => $request->mandate_sub,
        'mandate_point'=> $request->mandate_point,
        'mandate_last'=> $request->mandate_last,
        'mission_description'=> $request->mission_description,
        'chief_description'=> $request->chief_description,
        'value_1'=> $request->value_1,
        'value_2'=> $request->value_2,
        'value_3'=> $request->value_3,
        'value_4'=> $request->value_4,
        'value_5'=> $request->value_5,
        'value_6'=> $request->value_6,

        'about_image' => $save_url,
        'arrangement_image' => $save_path,
        'created_at' => Carbon::now(),

    ]);

    $notification = array(
        'message' => 'About Page Updated with Image Successfully',
        'alert-type' => 'success'
    );


    return redirect()->route('about.view')->with($notification);


} else{

    About::findOrFail($about)->update([

        'description' => $request->description,
        'sub_description' => $request->sub_description,
        'mandate_description' => $request->mandate_description,
        'arrangement_description' => $request->arrangement_description,
        'mandate_sub' => $request->mandate_sub,
        'mandate_point'=> $request->mandate_point,
        'mandate_last'=> $request->mandate_last,
        'mission_description'=> $request->mission_description,
        'chief_description'=> $request->chief_description,
        'value_1'=> $request->value_1,
        'value_2'=> $request->value_2,
        'value_3'=> $request->value_3,
        'value_4'=> $request->value_4,
        'value_5'=> $request->value_5,
        'value_6'=> $request->value_6,


]);

$notification = array(
    'message' => 'About Page Updated Successfully',
    'alert-type' => 'success'
);

return redirect()->route('about.view')->with($notification);


}//end else




}


    public function updateTitle(Request $request){
        // dd($request->all());
        $request ->validate([
            'about_title' => ['required','max:100'],
            'about_subtitle' => ['required','max:255'],
            'mission_title'=> ['required','max:255'],
            'mandate_title'=> ['required','max:255'],
            'arrangement_title'=> ['required','max:255'],
            'core_value_title'=> ['required','max:255'],
            'chief_title'=> ['required','max:255'],

        ]);

        SectionTitle::updateOrCreate(
            ['key' => 'about_title'],
            ['value' => $request->about_title]
        );

        SectionTitle::updateOrCreate(
            ['key' => 'about_subtitle'],
            ['value' => $request->about_subtitle]
        );

        SectionTitle::updateOrCreate(
            ['key' => 'mission_title'],
            ['value' => $request->mission_title]
        );

        SectionTitle::updateOrCreate(
            ['key' => 'mandate_title'],
            ['value' => $request->mandate_title]
        );

        SectionTitle::updateOrCreate(
            ['key'=> 'arrangement_title'],
            ['value'=> $request->arrangement_title]
        );

        SectionTitle::updateOrCreate(
            ['key'=> 'core_value_title'],
            ['value'=> $request->core_value_title]

        );

        SectionTitle::updateOrCreate(
            ['key'=> 'chief_title'],
            ['value'=> $request->chief_title]

         );



}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $about = About::findOrFail($id);
        $img = $about->about_image;
        $img = $about->arrangement_image;
        unlink($img);


        About::findOrFail($id)->delete();

        $notification = array(
            'message' => 'About Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }


}
