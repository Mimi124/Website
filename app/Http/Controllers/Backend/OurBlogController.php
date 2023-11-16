<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\OurBlogDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\OurBlogCreateRequest;
use App\Http\Requests\Backend\OurBlogUpdateRequest;
use App\Models\OurBlog;
use App\Models\SectionTitle;
use App\Traits\FileUploadTrait;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class OurBlogController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(OurBlogDataTable $dataTable)
    {
        $keys =[ 'ourblog_title','ourblog_subtitle','ourblog_description','ourblog_url'];
        $titles = SectionTitle::Wherein('key', $keys)->pluck('value','key');
// dd($titles);

        return $dataTable->render("layout.backend_layout.Menu.OurBlog.index", compact('titles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('layout.backend_layout.Menu.OurBlog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OurBlogCreateRequest $request)
    {

        // Handle Image Upload

        $imagePath = $this->uploadImage($request, 'image');
        $ourblog = new OurBlog();
        $ourblog->image = $imagePath;
        $ourblog->topic = $request->topic;
        $ourblog->date = date('MMM Do YYYY',strtotime($request->date));
        $ourblog->button_link = $request->button_link;
        $ourblog->save();

        $notification = array(
            'message' => ' Blog Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('ourBlog.view')->with($notification);
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
        $ourblog = OurBlog::findOrFail($id);
        return view('layout.backend_layout.Menu.OurBlog.edit',compact('ourblog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OurBlogUpdateRequest $request, string $id)
    {
        $ourblog = OurBlog::findOrFail($id);

        /** Handle Image Upload */
        $imagePath = $this->uploadImage($request, 'image', $ourblog->image);

        $ourblog->image = !empty($imagePath) ? $imagePath : $ourblog->image;
        $ourblog->image = $imagePath;
        $ourblog->topic = $request->topic;
        $ourblog->date = $request->date;
        $ourblog->button_link = $request->button_link;
        $ourblog->save();

        $notification = array(
            'message' => ' Blog Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('ourBlog.view')->with($notification);
    }


    //OURBLOG TITLE UPDATE

    public function updateTitle(Request $request){
        // dd($request->all());
        $request ->validate([
            'ourblog_title' => ['required','max:100'],
            'ourblog_subtitle' => ['required','max:255'],
            'ourblog_description'=> ['required'],
            'ourblog_url'=> ['required',''],

        ]);

        SectionTitle::updateOrCreate(
            ['key' => 'ourblog_title'],
            ['value' => $request->ourblog_title]
        );

        SectionTitle::updateOrCreate(
            ['key' => 'ourblog_subtitle'],
            ['value' => $request->ourblog_subtitle]
        );

        SectionTitle::updateOrCreate(
            ['key' => 'ourblog_description'],
            ['value' => $request->ourblog_description]
        );

        SectionTitle::updateOrCreate(
            ['key' => 'ourblog_url'],
            ['value' => $request->ourblog_url]
        );

        $notification = array(
            'message' => 'Our BLog Title Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $ourblog = OurBlog::findOrFail($id);
        $this->removeImage($ourblog->image);
        $ourblog->delete();

        $notification = array(
            'message' => 'Blog Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
