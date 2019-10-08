<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quotes;
use App\Models\Tags;
use Illuminate\Support\Str;
use Auth;


class QuotesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('admin');
    }

    
    public function index()
    {
        $contents = [
            
            'quotes' => Quotes::with(['tags'])->get(),
        ];
        // return $contents;
        $pagecontent = view('quotes.index', $contents);

        // masterpage
        $pagemain = array(
            'title' => 'Tags',
            'menu' => 'master',
            'submenu' => 'tags',
            'pagecontent' => $pagecontent,
        );

        return view('masterpage', $pagemain);
    }

    public function create_page()
    {
        $tags = Tags::all();
        $contents = [
            'tags' => $tags,
        ];

      $pagecontent = view('quotes.create', $contents);
  
      //masterpage
      $pagemain = array(
          'title' => 'quotes',
          'menu' => 'quotes',
          'submenu' => 'quotes',
          'pagecontent' => $pagecontent,
      );
  
      return view('masterpage', $pagemain);
    }
    
    public function save_page(Request $request)
    {
        // return $request->all();
        $request->validate([
            'tittle' => 'required',
            // 'slug' => 'required',
            'subject' => 'required',
            'status' => ''
        ]);

        //active
        $active = FALSE;
        if($request->has('active')) {
            $active = TRUE;
        }

        $quotesSave = new Quotes;
        $quotesSave->tittle = $request->tittle;
        $quotesSave->slug =  $slug = Str::slug($request->tittle, '-');
        $quotesSave->subject = $request->subject;
        $quotesSave->active = $active;
        $quotesSave->save();

        $quotesSave->tags()->attach($request->tag,[
                                    'created_at' => date('Y-m-d H:i:s')
                                    ]);

        return redirect('quotes')->with('status_success','Created Quotes');
    }

    public function show($slug)
    {
        // die('oke');
        // $slud = Quotes::where('tittle',$slug)->first();
        // return $slud;
    }
}
