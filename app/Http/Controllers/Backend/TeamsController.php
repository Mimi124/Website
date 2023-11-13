<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\TeamsDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\TeamCreateRequest;
use App\Http\Requests\Backend\TeamsUpdateRequest;
use App\Models\SectionTitle;
use App\Models\Teams;
use App\Traits\FileUploadTrait;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(TeamsDataTable $dataTable)
    {
        $keys =[ 'team_title','team_subtitle'];
        $titles = SectionTitle::Wherein('key', $keys)->pluck('value','key');
        // dd($titles['team_title']);
        return $dataTable->render("layout.backend_layout.Menu.Team.index", compact('titles'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('layout.backend_layout.Menu.Team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeamCreateRequest $request)
    {


        // Handle Image Upload

        $imagePath = $this->uploadImage($request, 'image');
        $team = new Teams();
        $team->image = $imagePath;
        $team->name = $request->name;
        $team->position = $request->position;
        $team->facebook_link = $request->facebook_link;
        $team->twitter_link = $request->twitter_link;
        $team->insta_link = $request->insta_link;
        $team->status = $request->status;
        $team->save();

        $notification = array(
            'message' => ' Member Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('team.view')->with($notification);
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
        $team = Teams::findOrFail($id);
        return view('layout.backend_layout.Menu.Team.edit',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TeamsUpdateRequest $request, string $id)
    {
            ///////////Image Update //////////////////////////////////
            $team = Teams::findOrFail($id);

            /** Handle Image Upload */
            $imagePath = $this->uploadImage($request, 'image', $team->image);

            $team->image = !empty($imagePath) ? $imagePath : $team->image;
            $team->name = $request->name;
            $team->position = $request->position;
            $team->facebook_link = $request->facebook_link;
            $team->twitter_link = $request->twitter_link;
            $team->insta_link = $request->insta_link;
            $team->status = $request->status;
            $team->save();

            $notification = array(
                'message' => ' Member Updated Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('team.view')->with($notification);
    }


//title update
    public function updateTitle(Request $request){
        // dd($request->all());
        $request ->validate([
            'team_title' => ['required','max:100'],
            'team_subtitle' => ['required','max:255']

        ]);

        SectionTitle::updateOrCreate(
            ['key' => 'team_title'],
            ['value' => $request->team_title]
        );

        SectionTitle::updateOrCreate(
            ['key' => 'team_subtitle'],
            ['value' => $request->team_subtitle]
        );


        $notification = array(
            'message' => 'Team Title Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $team = Teams::findOrFail($id);
        $this->removeImage($team->image);
        $team->delete();

        $notification = array(
            'message' => 'Member Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
