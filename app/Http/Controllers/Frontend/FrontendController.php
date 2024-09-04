<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Contracts\View\View;
use Statamic\View\View as StatamicView;

class FrontendController extends Controller
{


    function index()  {

        return (new StatamicView)->layout('layout')->template('home');
    }

    function about()  {

     return (new StatamicView)->layout('layout')->template('frontend_pages.About.about');



    }


    function Photo() {

        return (new StatamicView)->layout('layout')->template('frontend_pages.Photo.gallery');

    }

    function Video() {

        return (new StatamicView)->layout('layout')->template('frontend_pages.Video.videos');

    }



    function Contact() {
        return (new StatamicView)->layout('layout')->template('frontend_pages.Contact.contact');
    }

    function Project() {
        return (new StatamicView)->layout('layout')->template('frontend_pages.Projects.projects');
    }

    function projectDetails() {
        return (new StatamicView)->layout('layout')->template('frontend_pages.Projects.project-details');
    }

    function Blog() {




        // if($request->has('search') && $request->filled('search')){
        //     $blogs->where(function($query) use ($request) {
        //         $query->where('title', 'like', '%'.$request->search.'%')
        //             ->orWhere('description', 'like', '%'.$request->search.'%');
        //     });
        // }


        return (new StatamicView)->layout('layout')->template('frontend_pages.Blog.blog');
        // ->with(
        //         compact(
        //                 'blogs',


        //          ));
    }


    function blogDetails(string $slug) : View {
        $blog = Blog::where('slug', $slug)->firstOrFail();


        $latestBlogs = Blog::select('id', 'title', 'slug', 'created_at', 'image')
        ->where('status', 1)
        ->where('id', '!=', $blog->id)
        ->latest()->take(5)->get();



    $nextBlog = Blog::select('id', 'title', 'slug', 'image')->where('id', '>', $blog->id)->orderBy('id', 'ASC')->first();
    $previousBlog = Blog::select('id', 'title', 'slug', 'image')->where('id', '<', $blog->id)->orderBy('id', 'DESC')->first();

    return (new StatamicView)->layout('layout')->template('frontend_pages.Blog.blog-details')
    ->with(
        compact(
            'blog',
            'latestBlogs',

            'nextBlog',
            'previousBlog',


            ));
    }





}
