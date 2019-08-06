<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//    public function __invoke(Request $request)
//    {
//        //
//    }

    public function index()
    {
        $top_category=DB::table('category')
            ->where('top_category',1)
//            ->orderBy('categoryId','desc')
            ->get();
        $home=view('pages.home')
            ->with('top_category',$top_category);
        return view('main')
            ->with('content',$home);
//        return view('pages.home');
    }


}
