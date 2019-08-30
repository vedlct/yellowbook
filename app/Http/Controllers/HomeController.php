<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\City;
use App\Company;
use App\States;
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
//        $top_category=DB::table('category')
//            ->where('top_category',1)
//            ->orderBy('categoryId','desc')
//            ->get();
        $top_category = Category::where('top_category',1)
            ->orderBy('categoryId','desc')
            ->get();
        $cityInfo = City::all();
//        $artists = Category::all();
//        $allcity = City::select('cityName')->get();
//        $newarray = array();
//        foreach ($allcity as $alc){
//            array_push($newarray , $alc->cityName);
//        }
//        $array_final = preg_replace('/"([a-zA-Z_]+[a-zA-Z0-9_]*)":/','$1:',$newarray);
//        $cityName =$array_final;


//        $home=view('pages.home')
//            ->with('top_category',$top_category)
//            ->with('cityInfo',$cityInfo);
////            ->with('artists',$artists);
//
//
//        return view('main')
//            ->with('content',$home);

        return view('pages.home',compact('top_category','cityInfo'));

//        return view('pages.home');
    }

    public function show($id){

//        $top_category = DB::select('select * from category where categoryId = ?',[$id]);
//        $top_category=DB::table('category')
//            ->where('top_category',1)
//            ->where('categoryId',$id)
//            ->orderBy('categoryId','desc')
//            ->get();
//        return view('pages.products',['top_category'=>$top_category]);

        $top_category = Category::where('top_category',1)
            ->where('categoryId',$id)
            ->orderBy('categoryId','desc')
            ->get();
        return view('pages.products',compact('top_category'));
    }

//    public function getCity($id)
//    {
//        $cityInfo = City::select('cityName')
//                  ->where('cityId',$id)->get();
//        return $cityInfo;
//    }

    public function showArtist($letter){
        $cityInfo =City::all();
        $artists = Category::where('categoryName', 'like', $letter.'%')->get();
//        print_r($artists);
        return view('pages.home',compact('artists','cityInfo'));
    }


}
