<?php

namespace App\Http\Controllers;

use App\Category;
use App\Company;
use App\City;
use Illuminate\Http\Request;
use App\Menu;
use App\Post;
use App\States;
use Session;
use db;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Validator;

class CityController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        return view('city.allCity');
    }

    public function showAllCityInfo()
    {

        $cityInfo = City::select('city.cityId','city.cityName','city.COUNTY','city.cityStatus','us_states.STATE_NAME')
            ->leftJoin('us_states', 'city.ID_STATE', '=', 'us_states.ID')
            ->orderBy('cityId','desc')

            ->where('cityStatus','!=','Deleted')
            ->get();
         $datatables = Datatables::of($cityInfo);
         return $datatables->make(true);
    }

//    public function showAllCityInfo()
//    {
//
//        $cityInfo = City::orderBy('cityId','desc')
//
//            ->where('cityStatus','!=','Deleted')
//            ->get();
//        $datatables = Datatables::of($cityInfo);
//        return $datatables->make(true);
//    }

    public function create()
    {
        $cityInfo = City::all();
        $stateInfo = States::all();
//        return view('company.addCompany', ['company' => $categoryInfo]);
        return view('city.addCity',compact('cityInfo','stateInfo'));
    }

    public function store(Request $request)
    {
        $rules=[
            'cityName' => 'required|max:255',
            'cityStatus' => 'required|max:255',
            'ID_STATE' => 'required|max:255',
            'COUNTY' => 'required|max:255',



        ];

        $messages = [
            // 'dimensions' => 'Image dimention should be over 800px',
        ];

        $validator = Validator::make($request->all(), $rules,$messages)->validate();

        $cityInfo=new City();
        $cityInfo->cityName=$request->cityName;

        $cityInfo->cityStatus=$request->cityStatus;
        $cityInfo->ID_STATE=$request->ID_STATE;
        $cityInfo->COUNTY=$request->COUNTY;
        $cityInfo->orderNumber=$request->orderNumber;
        $cityInfo->LATITUDE=$request->LATITUDE;
        $cityInfo->LONGITUDE=$request->LONGITUDE;



        $cityInfo->insertedBy=Auth::user()->name;
        // $menu->lastModifiedBy=$r->lastModifiedBy;
        $cityInfo->insertedDate=date(now());
//        $menu->lastModifiedDate=date(now());
        //$menu->LastExportedBy=Auth::user()->name;
        $cityInfo->save();

        Session::flash('message', 'City Inserted successfully');
        return back();
    }


}
