<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\BlogCategoryDataTable;
use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Str;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(BlogCategoryDataTable $dataTable) : View|JsonResponse
    {

        return $dataTable->render("layout.backend_layout.Menu.BlogCategory.index");
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view("layout.backend_layout.Menu.BlogCategory.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:255', 'unique:blog_categories,name'],
            'status' => ['required', 'boolean']

        ]);

        $category = new BlogCategory();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->status = $request->status;
        $category->save();

        $notification = array(
            'message' => 'Blog Category  Created Successfully',
            'alert-type' => 'success'
        );

        return to_route('blogCategory.view')->with($notification);

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
    public function edit(string $id) : View
    {
        $category = BlogCategory::findOrFail($id);
        return view('layout.backend_layout.Menu.BlogCategory.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'max:255', 'unique:blog_categories,name,'.$id],
            'status' => ['required', 'boolean']
        ]);

        $category = BlogCategory::findOrFail($id);
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->status = $request->status;
        $category->save();

        $notification = array(
            'message' => 'Blog Category  Created Successfully',
            'alert-type' => 'success'
        );

        return to_route('blogCategory.view')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        BlogCategory::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Blog Category Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
