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

class RequestCompanyController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('request_company.allRequestCompany');
    }

    public function showAllCompanyInfo()
    {

        $companyInfo = Company::select('company.companyId','company.companyName','company.phone','company.status','company.email','category.categoryName')
            ->leftJoin('category', 'category.categoryId', '=', 'company.categoryId')
            ->orderBy('companyId','desc')

//            ->where('companyStatus IS NULL')
            ->where('companyStatus','=','Request')
            ->where('status','=',0)
            ->get();
        $datatables = Datatables::of($companyInfo);
        return $datatables->make(true);
    }

    function statusChecked(Request $r){

        $companyId =$r->id;

        $company = Company::where('companyId', $companyId)
            ->update(['status' => 1]);

    }

    function statusUnchecked(Request $r){

        $companyId =$r->id;

        $company = Company::where('companyId', $companyId)
            ->update(['status' => 0]);

    }
}
