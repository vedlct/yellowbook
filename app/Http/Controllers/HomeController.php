<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
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
