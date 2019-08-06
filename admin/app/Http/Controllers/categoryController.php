<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Menu;
use App\Post;
use Session;

use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Validator;

class categoryController extends Controller
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
//        echo 'hello';
//        exit();

        return view('category.allCategorys');
    }
    public function showAllMenuInfo()
    {
        $categoryInfo = Category::select('category.categoryId','category.top_category','category.categoryName','category.categoryType','category.insertedBy','category.lastModifiedBy',
            'category.lastModifiedDate', 'category.categoryStatus','category.orderNumber','newcategory.categoryName as parentCategory')
            ->leftJoin('category as newcategory', 'newcategory.parentId', '=', 'category.categoryId')
            ->orderBy('category.categoryId','desc')
            ->where('category.categoryStatus','!=','Deleted')
            ->get();
        $datatables = Datatables::of($categoryInfo);
        return $datatables->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allCategory=Category::select('category.categoryId','category.categoryName')->where('category.parentId',null)->get();
        $allPost=Post::select('postId','header')->get();
        $lastOrderNumber=Category::max('orderNumber');

        return view('category.addCategory',compact('allCategory','allPost','lastOrderNumber'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules=[
            'categoryName' => 'required|max:255',
            'categoryStatus' => 'required|max:50',
            'orderNumber' => 'required|unique:Category',

        ];

        $messages = [
            // 'dimensions' => 'Image dimention should be over 800px',
        ];

        $validator = Validator::make($request->all(), $rules,$messages)->validate();

        $category=new Category();
        $category->categoryName=$request->categoryName;
        if ($request->parentId == ""){

        }else{
            $category->parentId=$request->parentId;
        }
        if ($request->postId == ""){

        }else{
            $category->postId=$request->postId;
        }


//        $category->menuType=$request->menuType;

        $category->categoryStatus=$request->categoryStatus;
        $category->orderNumber=$request->orderNumber;
        $category->insertedBy=Auth::user()->name;
        // $menu->lastModifiedBy=$r->lastModifiedBy;
        $category->insertedDate=date(now());
//        $menu->lastModifiedDate=date(now());
        //$menu->LastExportedBy=Auth::user()->name;

        $category->save();

        Session::flash('message', 'Category Inserted successfully');
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

        $allCategory=Category::select('category.categoryId','category.categoryName')
            ->where('category.parentId',null)->where('category.categoryId','!=',$id)->get();
        $allPost=Post::select('postId','header')->get();
        $lastOrderNumber=Category::max('orderNumber');

        $category= Category::select('category.categoryId','category.categoryName','category.categoryType','category.insertedBy','category.lastModifiedBy',
            'category.lastModifiedDate', 'category.categoryStatus','category.orderNumber','newCategory.categoryName as parentCategory','category.postId')
            ->leftJoin('category as newCategory', 'newCategory.categoryId', '=', 'category.parentId')
            ->leftJoin('posts', 'posts.postId', '=', 'category.postId')
            ->findOrFail($id);

        return view('category.editCategory',compact('category','allCategory','allPost','lastOrderNumber'));

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
            'categoryName' => 'required|max:255',
            'categoryStatus' => 'required|max:50',
            'orderNumber' => 'required|unique:category,orderNumber,'.$id.',categoryId',

        ];

        $messages = [
            // 'dimensions' => 'Image dimention should be over 800px',
        ];

        $validator = Validator::make($request->all(), $rules,$messages)->validate();

        $category=Category::findOrFail($id);

        $category->categoryName=$request->categoryName;

        if ($request->parentId == ""){

        }else{
            $category->parentId=$request->parentId;
        }
        if ($request->postId == ""){

        }else{
            $category->postId=$request->postId;
        }
        $category->categoryType=$request->categoryType;

        $category->categoryStatus=$request->categoryStatus;
        $category->orderNumber=$request->orderNumber;
//        $menu->insertedBy=Auth::user()->name;
        $category->lastModifiedBy=Auth::user()->name;
//        $menu->insertedDate=date(now());
        $category->lastModifiedDate=date(now());

        $category->save();

        Session::flash('message', 'Category Updated successfully');

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
        $category=Category::findOrFail($request->id);
        $category->categoryStatus='Deleted';
        $category->save();
    }

    function topCategorychecked(Request $r){

        $categoryId =$r->id;

        $category = Category::where('categoryId', $categoryId)
            ->update(['top_category' => 1]);

    }

    function topCategoryunchecked(Request $r){

        $categoryId =$r->id;

        $category = Category::where('categoryId', $categoryId)
            ->update(['top_category' => 0]);

    }
}
