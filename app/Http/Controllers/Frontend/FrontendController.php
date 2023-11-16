<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Agencies;
use App\Models\Facts;
use App\Models\Features;
use App\Models\Gallery;
use App\Models\OurBlog;
use App\Models\OurGoal;
use App\Models\SectionTitle;
use App\Models\Slider;
use App\Models\Teams;
use App\Models\Testimonial;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class FrontendController extends Controller
{
    function index() : View {
        $sectionTitles = $this->getSectionTitles();

        // dd($sectionTitles);

        $sliders = Slider::where('status', 1)->get();
        // dd($sliders);
        $features = Features::where('status', 1)->get();
        $goals = OurGoal::where('status', 1)->get();
        $teams = Teams::where('status', 1)->get();
        $facts = Facts::get();
        $blogs = OurBlog::take(2)->get();
        $testimonials = Testimonial::where(['show_at_home' => 1, 'status' => 1])->get();
        $agency = Agencies::where('status', 1)->get();


        return view("layout.frontend_layout.index",
        compact(
                'sliders',
                'features',
                'goals',
                'sectionTitles',
                'teams',
                'facts',
                'blogs',
                'testimonials',
                'agency',
        ));
    }

    function getSectionTitles() : Collection {
        $keys = [
            'team_title',
            'team_subtitle',
            'ourblog_title',
            'ourblog_subtitle',
            'ourblog_description',
            'ourblog_url',
            'testimonial_title',
            'testimonial_subtitle',
            'agency_title',
        ];

        return SectionTitle::whereIn('key', $keys)->pluck('value','key');
    }


    function about() : View {
        $keys = [
            'team_title',
            'team_subtitle',
            'about_title',
            'about_subtitle',
            'arrangement_title',
            'mandate_title',
            'mission_title',
            'core_value_title',
            'chief_title',
        ];

        $sectionTitles = SectionTitle::whereIn('key', $keys)->pluck('value','key');


        $facts = Facts::get();
        $teams = Teams::where('status', 1)->get();
        $about = About::get();




        return view('frontend_pages.About.about',
        compact(
                'teams',
                'facts',
                'sectionTitles',
                'about',
         ));



    }


    function Photo() : View {
        $keys = [
            'gallery_title',
            'gallery_subtitle',
        ];

        $sectionTitles = SectionTitle::whereIn('key', $keys)->pluck('value','key');

        $gallery = Gallery::latest()->get();

        // $gallery = Gallery::where(['status' => 1])->paginate(12);

        return view('frontend_pages.Photo.gallery',compact('sectionTitles','gallery'));
    }

    function Contact() : View {

        return view('frontend_pages.Contact.contact');
    }


}
