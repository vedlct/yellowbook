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

        $top_category = Category::where('top_category',1)
            ->orderBy('categoryId','desc')
            ->get();
        $cityInfo = City::select('cityId','cityName')
//                ->cursor();
                   ->get();


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
//        $companyInfo =Company::all();
        $companyInfo = Company::select('city.cityName','us_states.STATE_NAME','company.companyId','company.companyName','company.address','company.telephone','company.facebookPage','company.email','company.fax','company.phone','company.website')
            ->leftJoin('city', 'city.cityId', '=', 'company.cityId')
            ->leftJoin('us_states', 'us_states.ID', '=', 'company.ID')
        ->where('categoryId',$id)->get();
        return view('pages.products',compact('top_category','companyInfo'));
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
        $companyInfo = Company::where('categoryId',$letter)->get();
//        print_r($artists);
        return view('pages.home',compact('artists','cityInfo','companyInfo'));
    }

    public function getCity($id)
    {
        $cityInfo = City::where('ID_STATE',$id)->get();
        return $cityInfo;
    }


}
