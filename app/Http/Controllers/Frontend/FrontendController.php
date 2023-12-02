<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Agencies;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Facts;
use App\Models\Features;
use App\Models\Gallery;
use App\Models\OurGoal;
use App\Models\SectionTitle;
use App\Models\Slider;
use App\Models\Teams;
use App\Models\Testimonial;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Statamic\View\View as StatamicView;

class FrontendController extends Controller
{


    function index()  {
      $sliders = Slider::where('status', 1)->get();
        // dd($sliders);
        $features = Features::where('status', 1)->get();
        $goals = OurGoal::get();
        $teams = Teams::get();
        $facts = Facts::get();
        $blogs = Blog::latest()->take(2)->get();
        $testimonials = Testimonial::get();
        $agency = Agencies::get();

        return (new StatamicView)->layout('layout')->template('home')->with(
        compact(
            'sliders',
            'features',
            'goals',
            'teams',
            'facts',
            'blogs',
            'testimonials',
            'agency',
    ));

    }

    function about()  {

    //   $facts = Facts::get();
    //     $teams = Teams::where('status', 1)->get();

     return (new StatamicView)->layout('layout')->template('frontend_pages.About.about');
    //  ->with(
    //     compact(
    //             'teams',
    //             'facts',

    //      ));



    }


    function Photo() {

        return (new StatamicView)->layout('layout')->template('frontend_pages.Photo.gallery');

    }

    function Video() {

        return (new StatamicView)->layout('layout')->template('frontend_pages.Video.videos');

    }

    function Contact() : View {

        return view('frontend_pages.Contact.contact');
    }

    function Blog(Request $request) : View {

        $blogs = Blog::with(['category','user'])->where(['status' => 1]);



        if($request->has('search') && $request->filled('search')){
            $blogs->where(function($query) use ($request) {
                $query->where('title', 'like', '%'.$request->search.'%')
                    ->orWhere('description', 'like', '%'.$request->search.'%');
            });
        }

        if($request->has('category') && $request->filled('category')) {
            $blogs->whereHas('category', function($query) use ($request){
                $query->where('slug', $request->category);
            });
        }
        $blogs = $blogs->latest()->paginate(2);

        $categories = BlogCategory::withCount(['blogs' => function($query){
            $query->where('status', 1);
        }])->where('status', 1)->get();

        return view('frontend_pages.Blog.blog',compact('blogs','categories'));
    }


    function blogDetails(string $slug) : View {
        $blog = Blog::with(['user'])->where('slug', $slug)->where('status', 1)->firstOrFail();


        $latestBlogs = Blog::select('id', 'title', 'slug', 'created_at', 'image')
        ->where('status', 1)
        ->where('id', '!=', $blog->id)
        ->latest()->take(5)->get();



    $nextBlog = Blog::select('id', 'title', 'slug', 'image')->where('id', '>', $blog->id)->orderBy('id', 'ASC')->first();
    $previousBlog = Blog::select('id', 'title', 'slug', 'image')->where('id', '<', $blog->id)->orderBy('id', 'DESC')->first();

        return view('frontend_pages.Blog.blog-details',
        compact(
            'blog',
            'latestBlogs',

            'nextBlog',
            'previousBlog',


            ));
    }



}
