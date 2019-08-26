<?php

namespace App\Http\Controllers;

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
        $top_category=DB::table('category')
            ->where('top_category',1)
//            ->orderBy('categoryId','desc')
            ->get();
        $allcity = City::select('cityName')->get();
        $newarray = array();
        foreach ($allcity as $alc){
            array_push($newarray , $alc->cityName);
        }
        $array_final = preg_replace('/"([a-zA-Z_]+[a-zA-Z0-9_]*)":/','$1:',$newarray);
        $cityName =$array_final;


        $home=view('pages.home')
            ->with('top_category',$top_category)
            ->with('cityName',$cityName);


        return view('main')
            ->with('content',$home);

//        return view('pages.home');
    }

//    public function getCity($id)
//    {
//        $cityInfo = City::select('cityName')
//                  ->where('cityId',$id)->get();
//        return $cityInfo;
//    }

//    public function search(Request $request)
//    {
//        $search = $request->get('city');
////        print_r($search);
//
//        $result = Company::where('city', 'LIKE', '%'. $search. '%')->get();
//
////         print_r($result);
////         exit();
//        return response()->json($result);
//
//    }

//    function fetch(Request $request)
//    {
//        if($request->get('query'))
//        {
//            $query = $request->get('query');
//            $data = DB::table('company')
//                ->where('address', 'LIKE', "%{$query}%")
//                ->get();
//            $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
//            foreach($data as $row)
//            {
//                $output .= '
//       <li><a href="#">'.$row->address.'</a></li>
//       ';
//            }
//            $output .= '</ul>';
//            echo $output;
//        }
//    }


}
