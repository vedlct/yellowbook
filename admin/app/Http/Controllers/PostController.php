<?php

namespace App\Http\Controllers;

use App\Category;
use App\Company;
use Illuminate\Http\Request;
use App\Menu;
use App\Post;
use Session;

use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
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
        return view('post.allPost');
    }
    public function showAllPostInfo()
    {
        $postInfo = Post::select('posts.*','category.categoryName','menu.menuName','company.companyName')
            ->leftJoin('category', 'posts.fkcategoryId', '=', 'category.categoryId')
            ->leftJoin('menu', 'menu.menuId', '=', 'posts.fkmenuId')
            ->leftJoin('company', 'company.companyId', '=', 'posts.fkcompanyId')
            ->orderBy('posts.postId','desc')
            ->where('posts.postStatus','!=','Deleted');


        $datatables = Datatables::of($postInfo);
        return $datatables->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $lastOrderNumber=Post::max('orderNumber');
        $allCategory=Category::select('categoryName','categoryId')->where('categoryStatus','!=','Deleted')->orderBy('orderNumber','desc')->get();
        $allMenu=Menu::select('menuName','menuId')->where('menuStatus','!=','Deleted')->orderBy('orderNumber','desc')->get();
        $allCompany=Company::select('companyName','companyId')->where('companyStatus','!=','Deleted')->orderBy('companyId','desc')->get();

        return view('post.addPost',compact('lastOrderNumber','allCategory','allMenu','allCompany'));
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
            'header' => 'required|max:45',
            'postStatus' => 'required|max:50',
            'orderNumber' => 'required|unique:posts',

        ];

        $messages = [
            // 'dimensions' => 'Image dimention should be over 800px',
        ];

        $validator = Validator::make($request->all(), $rules,$messages)->validate();

        $post=new Post();
        $post->header=$request->header;
        $post->body=$request->body;

        if ($request->fkcategoryId == ""){

        }else{
            $post->fkcategoryId=$request->fkcategoryId;
        }
        if ($request->fkcompanyId == ""){

        }else{
            $post->fkcompanyId=$request->fkcompanyId;
        }
        if ($request->fkmenuId == ""){

        }else{
            $post->fkmenuId=$request->fkmenuId;
        }



        $post->postStatus=$request->postStatus;
        $post->orderNumber=$request->orderNumber;
//        $category->insertedBy=Auth::user()->name;
        // $menu->lastModifiedBy=$r->lastModifiedBy;
        $post->created_at=date(now());
//        $menu->lastModifiedDate=date(now());
        //$menu->LastExportedBy=Auth::user()->name;
        $post->save();

        Session::flash('message', 'Post Inserted successfully');
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

        $allCategory=Category::select('categoryName','categoryId')->where('categoryStatus','!=','Deleted')->orderBy('orderNumber','desc')->get();
        $allMenu=Menu::select('menuName','menuId')->where('menuStatus','!=','Deleted')->orderBy('orderNumber','desc')->get();
        $allCompany=Company::select('companyName','companyId')->where('companyStatus','!=','Deleted')->orderBy('companyId','desc')->get();
        $lastOrderNumber=Post::max('orderNumber');

        $post= Post::select('posts.*','category.categoryName','menu.menuName','company.companyName')
            ->leftJoin('category', 'posts.fkcategoryId', '=', 'category.categoryId')
            ->leftJoin('menu', 'menu.menuId', '=', 'posts.fkmenuId')
            ->leftJoin('company', 'company.companyId', '=', 'posts.fkcompanyId')
            ->findOrFail($id);

        return view('post.editPost',compact('post','allCategory','allMenu','lastOrderNumber','allCompany'));

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
            'header' => 'required|max:45',
            'postStatus' => 'required|max:50',
            'orderNumber' => 'required|unique:posts',

        ];

        $messages = [
            // 'dimensions' => 'Image dimention should be over 800px',
        ];

        $validator = Validator::make($request->all(), $rules,$messages)->validate();

        $post=Post::findOrFail($id);

        $post->header=$request->header;
        $post->body=$request->body;

        if ($request->fkcategoryId == ""){

        }else{
            $post->fkcategoryId=$request->fkcategoryId;
        }
        if ($request->fkcompanyId == ""){

        }else{
            $post->fkcompanyId=$request->fkcompanyId;
        }
        if ($request->fkmenuId == ""){

        }else{
            $post->fkmenuId=$request->fkmenuId;
        }


        $post->postStatus=$request->postStatus;
        $post->orderNumber=$request->orderNumber;

        $post->save();

        Session::flash('message', 'Post Updated successfully');

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
        $post=Post::findOrFail($request->id);
        $post->postStatus='Deleted';
        $post->save();
    }
}
