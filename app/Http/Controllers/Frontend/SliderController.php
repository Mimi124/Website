<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Features;
use App\Models\Our_Goal;
use App\Models\Slider;
use App\Models\Teams;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SliderController extends Controller
{

    function index() : View {
        $sliders = Slider::where('status', 1)->get();
        $features = Features::where('status', 1)->get();
        $goals = Our_Goal::where('status', 1)->get();
        $teams = Teams::where('status', 1)->get();

        return view("layout.frontend_layout.index",compact('sliders', 'features','goals', 'teams'));
    }
}
