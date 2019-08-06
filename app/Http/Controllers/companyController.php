<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use DB;

class companyController extends Controller
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
        return view('pages.company');
    }
    public function store(Request $request)
    {
        $request->validate([

            'companyName' => ['required','string'],
            'address' =>  ['required','string'],
            'email' =>  ['required'],
//            'phone' =>  ['required','string'],

        ]);

        DB::table('company')->insert([

            "companyName" => $request->companyName,
            "category" => $request->category,
            "address" => $request->address,
            "city" => $request->city,
            "country" => $request->country,
            "telephone" => $request->telephone,
            "email" => $request->email,
            "fax" => $request->fax,
            "website" => $request->website,
            "facebookPage" => $request->facebookPage,
            "phone" => $request->phone,

        ]);

        echo "<script>alert('Submitted Successfully');window.open(`".route('add.company')."`, `_self`);</script>";
    }
}
