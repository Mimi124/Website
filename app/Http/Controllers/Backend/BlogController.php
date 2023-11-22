<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\BlogDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\BlogCreateRequest;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;
use Str;
use Illuminate\Support\Facades\File;
use DOMDocument;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(BlogDataTable $dataTable) : View|JsonResponse
    {

        return $dataTable->render("layout.backend_layout.Menu.Blog.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        // $category = BlogCategory::where('status',1)->orderBy('id','desc')->get();
        $categories = BlogCategory::all();
        return view("layout.backend_layout.Menu.Blog.create",compact("categories"));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //  dd($request->all());

         $validateData = $request->validate([
            "title"=> "required",
            "category"=> "required",
            'description' => "required",
            'seo_title' => 'max:255',
            'seo_description'=> 'max:255',
            'status'=> 'required','boolean',
            'image' => 'required','image'

         ]);

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->save('upload/blog/'.$name_gen);
        $save_url = 'upload/blog/'.$name_gen;


        $description = $request->description;
        $dom = new DOMDocument();
        $dom->loadHTML($description,9);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {

            $data = base64_decode(explode(',',explode(';',$img->getAttribute('src'))[1])[1]);
            $image_name =  hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(300,300)->save('upload/blog/'.$image_name);
            file_put_contents(public_path().$image_name,$data);

            $img->removeAttribute('src');
            $img->setAttribute('src',$image_name);
        }
        
        $description = $dom->saveHTML();

             Blog::insert([
             'user_id' => auth()->user()->id,
             'image' => $save_url,
             'title' => $request->title,
             'slug' => Str::slug($request->title),
             'category_id' => $request->category,
             'description' => $request->description,
             'seo_title' => $request->seo_title,
             'seo_description' => $request->seo_description,
             'status' => $request->status,
             'created_at' => Carbon::now(),

            ]);



        $notification = array(
            'message' => 'Blog Post Created Added Successfully',
            'alert-type' => 'success'
        );

        return to_route('blog.view')->with($notification);

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
    public function edit(string $id): View
    {
        $blog = Blog::findOrFail($id);
        $categories = BlogCategory::all();
        return view('layout.backend_layout.Menu.Blog.edit', compact('blog', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) : RedirectResponse
    {

        $blog = $request->id;
        if($request->file('image')){

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->save('upload/blog/'.$name_gen);
        $save_url = 'upload/blog/'.$name_gen;


        $description = $request->description;

        $dom = new DOMDocument();
        $dom->loadHTML($description,9);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {

            // Check if the image is a new one
            if (strpos($img->getAttribute('src'),'data:image/') ===0) {

                $data = base64_decode(explode(',',explode(';',$img->getAttribute('src'))[1])[1]);
                $image_name =  hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(300,300)->save('upload/blog/'.$image_name);
                file_put_contents(public_path().$image_name,$data);

                $img->removeAttribute('src');
                $img->setAttribute('src',$image_name);
            }

        }
        $description = $dom->saveHTML();


        Blog::findOrFail($blog)->update([

            'image' => $save_url,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'category_id' => $request->category,
            'description' => $request->description,
            'seo_title' => $request->seo_title,
            'seo_description' => $request->seo_description,
            'status' => $request->status,
            'created_at' => Carbon::now(),

        ]);


        $notification = array(
            'message' => 'Blog Post Updated With Image Successfully',
            'alert-type' => 'success'
        );
        return to_route('blog.view')->with($notification);

    } else{

        Blog::findOrFail($blog)->update([


            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'category_id' => $request->category,
            'description' => $request->description,
            'seo_title' => $request->seo_title,
            'seo_description' => $request->seo_description,
            'status' => $request->status,
            'created_at' => Carbon::now(),

    ]);

    $notification = array(
        'message' => ' Blog Updated Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('blog.view')->with($notification);
}
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::findOrFail($id);
        $img = $blog->image;
        unlink($img);

        $dom= new DOMDocument();
        $dom->loadHTML($blog->description,9);
        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {

            $src = $img->getAttribute('src');
            $path = Str::of($src)->after('/');


            if (File::exists($path)) {
                File::delete($path);

            }
        }

        Blog::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Image Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
