<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\AgenciesDataTable;
use App\Http\Controllers\Controller;
use App\Models\Agencies;
use App\Models\SectionTitle;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AgenciesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(AgenciesDataTable $dataTable)
    {
        $keys =[ 'agency_title'];
        $titles = SectionTitle::Wherein('key', $keys)->pluck('value','key');
        //  dd($titles);

        return $dataTable->render("layout.backend_layout.Menu.Agencies.index", compact('titles'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('layout.backend_layout.Menu.Agencies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name'=> 'required',
            'status'=> 'required',
            'image' => 'required',
        ],
        [
            'image.required' => 'Image Field Is Required',
        ],
    );

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('upload/agencies/'.$name_gen);
        $save_url = 'upload/agencies/'.$name_gen;


        Agencies::insert([
            'name' => $request->name,
            'status' => $request->status,
            'image' => $save_url,
            'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Agency Uploaded Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('agency.view')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $agency = Agencies::findOrFail($id);
        return view('layout.backend_layout.Menu.Agencies.edit',compact('agency'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $agency = $request->id;
        if($request->file('image')){

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('upload/gallery/'.$name_gen);
        $save_url = 'upload/gallery/'.$name_gen;

        Agencies::findOrFail($agency)->update([
            'name'=> $request->name,
            'status' => $request->status,
            'image' => $save_url,
            'created_at' => Carbon::now(),

        ]);

         $notification = array(
            'message' => 'Agency Updated with Image Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('gallery.view')->with($notification);

        } else{

            Agencies::findOrFail($agency)->update([

                'name'=> $request->name,
                'status' => $request->status,
                'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => ' Agency Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('agency.view')->with($notification);
    }

    }



    public function updateTitle(Request $request){
        // dd($request->all());
        $request ->validate([
            'agency_title' => ['required','max:100'],


        ]);

        SectionTitle::updateOrCreate(
            ['key' => 'agency_title'],
            ['value' => $request->agency_title]
        );




        $notification = array(
            'message' => 'Agency Title Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);



    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $agency = Agencies::findOrFail($id);
        $img = $agency->image;
        unlink($img);

        Agencies::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Agency Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
