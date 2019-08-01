<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Share;

class BlogController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $shares = Share::all();

        return view('blog.blog', compact('shares'));
//        return view('blog.blog');
    }

    public function store(Request $request)
    {
        $request->validate([
            'blog_title'=>'required',
            'blog_name'=> 'required',
            // 'filenames' => 'required',

            // 'filenames.*' => 'mimes:doc,pdf,docx,zip'
        ]);


        // ]);
        $share = new Share;
        $share->blog_title = $request->get('blog_title');
        $share->blog_name= $request->get('blog_name');
        $share->blog_price= $request->get('blog_price');


        $share->save();
        return redirect('/blog')->with('success', 'Successful');
    }
}
