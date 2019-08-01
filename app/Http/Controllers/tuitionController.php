<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tuitionController extends Controller
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
        return view('pages.tuition');
    }

}
