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
    public function index()
    {
        $keys =[ 'ourblog_title','ourblog_subtitle','ourblog_description','ourblog_url'];
        $titles = SectionTitle::Wherein('key', $keys)->pluck('value','key');
// dd($titles);

        return view("layout.backend_layout.Menu.OurBlog.index", compact('titles'));
    }

    /**
     * Show the form for creating a new resource.
     */
   
}
