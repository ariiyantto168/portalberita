<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Quotes;
use App\Models\Tags;

class BlogsController extends Controller
{
    public function index()
    {
        $contents = [
            'quotes' => Quotes::with(['tags','images'])->get(),
            'tags' => Tags::all(),
        ];
        // return $contents;
        $pagecontent = view('frontend.blogs.index', $contents);

        $pagemain = array(
            'title' => 'Categories',
            // 'menu' => 'master',
            // 'submenu' => 'categories',
            'pagecontent' => $pagecontent
        );
        
        return view('frontend.masterpage_frontend', $pagemain);
    }

    public function show($slug)
    {
        $slud = Quotes::where('tittle',$slug)->first();
        $contents = [
            'slud' => $slud,
            'quotes' => Quotes::with(['tags','images'])->get(),
            'tags' => Tags::all(),
        ];
        // return $contents;
        $pagecontent = view('frontend.blogs.show', $contents);

        $pagemain = array(
            'title' => 'Categories',
            // 'menu' => 'master',
            // 'submenu' => 'categories',
            'pagecontent' => $pagecontent
        );
        
        return view('frontend.masterpage_frontend', $pagemain);
        // return $slud;
    }
}
