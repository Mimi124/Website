<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Facts;
use App\Models\Features;
use App\Models\OurGoal;
use App\Models\Slider;
use App\Models\Teams;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    function index() : View {
        $sectionTitles = $this->getSectionTitles();

        // dd($sectionTitles);

        $sliders = Slider::where('status', 1)->get();
        $features = Features::where('status', 1)->get();
        $goals = OurGoal::where('status', 1)->get();
        $teams = Teams::where('status', 1)->get();
        $facts = Facts::get();

        return view("layout.frontend_layout.index",
        compact(
                'sliders',
                'features',
                'goals',
                'sectionTitles',
                'teams',
                'facts'
        ));
    }

    function getSectionTitles() : Collection {
        $keys = [
            'team_title',
            'team_subtitle',
        ];

        return SectionTitle::whereIn('key', $keys)->pluck('value','key');
    }
}
