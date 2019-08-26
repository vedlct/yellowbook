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

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('company.allCompany');
    }
//    public function showAllCompanyInfo()
//    {
//
//        $companyInfo = Company::orderBy('companyId','desc')
//            ->where('companyStatus','!=','Deleted')
//            ->get();
//        $datatables = Datatables::of($companyInfo);
//        return $datatables->make(true);
//    }

    public function showAllCompanyInfo()
    {

        $companyInfo = Company::select('company.companyId','company.companyName','company.phone','company.email','company.companyStatus','category.categoryName')
            ->leftJoin('category', 'category.categoryId', '=', 'company.categoryId')
            ->orderBy('companyId','desc')

            ->where('companyStatus','!=','Deleted')
            ->get();
        $datatables = Datatables::of($companyInfo);
        return $datatables->make(true);
    }

//    public function showAllCompanyInfo()
//    {
//
//        $companyInfo = DB::table('company')
//            ->join('category', 'category.categoryId', '=', 'company.categoryId')
//            ->select('company.*', 'category.categoryName')
//            ->orderBy('companyId','desc')
//            ->where('companyStatus','!=','Deleted')
//            ->get();
//        $datatables = Datatables::of($companyInfo);
//        return $datatables->make(true);
//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryInfo = Category::all();
        $cityInfo = City::all();
        $stateInfo = States::all();
//        return view('company.addCompany', ['company' => $categoryInfo]);
        return view('company.addCompany',compact('categoryInfo','cityInfo','stateInfo'));
    }

    public function getCity($id)
    {
        $cityInfo = City::where('ID_STATE',$id)->get();
        return $cityInfo;
    }
    public function store(Request $request)
    {
        $rules=[
            'companyName' => 'required|max:255',
            'companyStatus' => 'required|max:255',
            'categoryId' => 'required|max:255',
            'address' => 'required|max:255',
            'cityId' => 'required|max:255',
            'country' => 'required|max:255',
            'telephone' => 'required|max:255',
            'email' => 'required|max:255',



        ];

        $messages = [
            // 'dimensions' => 'Image dimention should be over 800px',
        ];

        $validator = Validator::make($request->all(), $rules,$messages)->validate();

        $company=new Company();
        $company->companyName=$request->companyName;
//        if ($request->parentId == ""){
//
//        }else{
//            $category->parentId=$request->parentId;
//        }
//        if ($request->postId == ""){
//
//        }else{
//            $category->postId=$request->postId
//        }


//        $category->menuType=$request->menuType;
        $company->companyStatus=$request->companyStatus;
        $company->categoryId=$request->categoryId;
        $company->address=$request->address;
        $company->cityId=$request->cityId;
        $company->ID=$request->ID;
        $company->country=$request->country;
        $company->telephone=$request->telephone;
        $company->fax=$request->fax;
        $company->email=$request->email;
        $company->website=$request->website;
        $company->facebookPage=$request->facebookPage;
        $company->phone=$request->phone;

        $company->insertedBy=Auth::user()->name;
        // $menu->lastModifiedBy=$r->lastModifiedBy;
        $company->insertedDate=date(now());
//        $menu->lastModifiedDate=date(now());
        //$menu->LastExportedBy=Auth::user()->name;
        $company->save();

        Session::flash('message', 'Company Inserted successfully');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {



        $company= Company::findOrFail($id);
        $categoryInfo = Category::all();
        $cityInfo = City::all();
        $stateInfo = States::all();

        return view('company.editCompany',compact('company','categoryInfo','cityInfo','stateInfo'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules=[
            'companyName' => 'required|max:255',
            'companyStatus' => 'required|max:255',
            'address' => 'required|max:255',
            'cityId' => 'required|max:255',
            'categoryId' => 'required|max:255',
            'country' => 'required|max:255',
            'telephone' => 'required|max:255',
            'email' => 'required|max:255',


        ];

        $messages = [
            // 'dimensions' => 'Image dimention should be over 800px',
        ];

        $validator = Validator::make($request->all(), $rules,$messages)->validate();

        $company=Company::find($id);
        $company->companyName=$request->companyName;

        $company->companyStatus=$request->companyStatus;
        $company->categoryId=$request->categoryId;
        $company->address=$request->address;
        $company->cityId=$request->cityId;
        $company->ID=$request->ID;
        $company->country=$request->country;
        $company->telephone=$request->telephone;
        $company->fax=$request->fax;
        $company->email=$request->email;
        $company->website=$request->website;
        $company->facebookPage=$request->facebookPage;
        $company->phone=$request->phone;


//        $menu->insertedBy=Auth::user()->name;
        $company->lastModifiedBy=Auth::user()->name;
//        $menu->insertedDate=date(now());
        $company->lastModifiedDate=date(now());

        $company->save();

        Session::flash('message', 'Company Updated successfully');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function delete(Request $request)
    {
        $company=Company::findOrFail($request->id);
        $company->companyStatus='Deleted';
        $company->save();
    }
}
