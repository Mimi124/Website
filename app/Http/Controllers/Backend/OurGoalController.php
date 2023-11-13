<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Our_GoalDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Our_GoalCreateRequest;
use App\Http\Requests\Backend\Our_GoalUpdateRequest;
use App\Models\OurGoal;
use App\Traits\FileUploadTrait;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class OurGoalController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(Our_GoalDataTable $dataTable)
    {
        return $dataTable->render("layout.backend_layout.Menu.Goals.index");

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        //
        return view('layout.backend_layout.Menu.Goals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Our_GoalCreateRequest $request): RedirectResponse
    {


        //  dd($request->all());

        $imagePath = $this->uploadImage($request, 'image');
        $goal = new OurGoal();
        $goal->image = $imagePath;
        $goal->title = $request->title;
        $goal->subtitle = $request->subtitle;
        $goal->description = $request->description;
        $goal->vision = $request->vision;
        $goal->vision_des = $request->vision_des;
        $goal->leadership = $request->leadership;
        $goal->leadership_des = $request->leadership_des;
        $goal->button_link = $request->button_link;
        $goal->status = $request->status;
        $goal->save();

        $notification = array(
            'message' => ' Goal Uploaded Successfully',
            'alert-type' => 'success'
        );

        return to_route('goal.view')->with($notification);

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
        $goal = OurGoal::findOrFail($id);
        return view('layout.backend_layout.Menu.Goals.edit',compact('goal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Our_GoalUpdateRequest $request, string $id)
    {
        $goal = OurGoal::findOrFail($id);
        $imagePath = $this->uploadImage($request, 'image', $goal->image);

        $goal->image = !empty($imagePath) ? $imagePath : $goal->image;
        $goal->title = $request->title;
        $goal->subtitle = $request->subtitle;
        $goal->description = $request->description;
        $goal->vision = $request->vision;
        $goal->vision_des = $request->vision_des;
        $goal->leadership = $request->leadership;
        $goal->leadership_des = $request->leadership_des;
        $goal->button_link = $request->button_link;
        $goal->status = $request->status;
        $goal->save();

        $notification = array(
            'message' => ' Goal Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('goal.view')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $goal = OurGoal::findOrFail($id);
        $this->removeImage($goal->image);
        $goal->delete();

        $notification = array(
            'message' => 'Goal Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
