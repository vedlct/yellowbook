<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Company;
use App\City;
use App\States;

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
        $categoryInfo = Category::all();
        $cityInfo = City::all();
        $stateInfo = States::all();
        return view('pages.company',compact('categoryInfo','cityInfo','stateInfo'));
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
            "categoryId" => $request->categoryId,
            "address" => $request->address,
            "cityId" => $request->cityId,
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

//    public function getCity($id)
//    {
//        $cityInfo = City::where('ID_STATE',$id)->get();
//        return $cityInfo;
//    }
}
