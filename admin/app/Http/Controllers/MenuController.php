<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Post;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Validator;

class MenuController extends Controller
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
        return view('menu.allMenu');
    }
    public function showAllMenuInfo()
    {
        $menuInfo = Menu::select('menu.menuId','menu.menuName','menu.menuType','menu.insertedBy','menu.lastModifiedBy',
            'menu.lastModifiedDate', 'menu.menuStatus','menu.orderNumber','newMenu.menuName as parentMenu')
            ->leftJoin('menu as newMenu', 'newMenu.parentId', '=', 'menu.menuId')
            ->orderBy('menu.menuId','desc')
            ->get();
        $datatables = Datatables::of($menuInfo);
        return $datatables->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allMenu=Menu::select('menu.menuId','menu.menuName')->where('menu.parentId',null)->get();
        $allPost=Post::select('postId','header')->get();
        $lastOrderNumber=Menu::max('orderNumber');
        return view('menu.addMenu',compact('allMenu','lastOrderNumber','allPost'));
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
            'menuName' => 'required|max:255',
            'menuStatus' => 'required|max:50',
            'orderNumber' => 'required|unique:menu',

        ];

        $messages = [
            // 'dimensions' => 'Image dimention should be over 800px',
        ];

        $validator = Validator::make($request->all(), $rules,$messages)->validate();

        $menu=new Menu();
        $menu->menuName=$request->menuName;
        $menu->parentId=$request->parentId;
        $menu->postId=$request->postId;
        $menu->menuType=$request->menuType;
        $menu->menuStatus=$request->menuStatus;
        $menu->orderNumber=$request->orderNumber;
        $menu->insertedBy=Auth::user()->name;
       // $menu->lastModifiedBy=$r->lastModifiedBy;
        $menu->insertedDate=date(now());
//        $menu->lastModifiedDate=date(now());
        //$menu->LastExportedBy=Auth::user()->name;
        $menu->save();

        Session::flash('message', 'Menu Inserted successfully');
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $allMenu=Menu::select('menu.menuId','menu.menuName')->where('menu.parentId',null)->where('menu.menuId','!=',$id)->get();
        $allPost=Post::select('postId','header')->get();
        $lastOrderNumber=Menu::max('orderNumber');
        $menu= Menu::select('menu.menuId','menu.menuName','menu.menuType','menu.insertedBy','menu.lastModifiedBy',
            'menu.lastModifiedDate', 'menu.menuStatus','menu.orderNumber','newMenu.menuName as parentMenu','menu.postId')
            ->leftJoin('menu as newMenu', 'newMenu.parentId', '=', 'menu.menuId')
            ->leftJoin('posts', 'posts.postId', '=', 'menu.postId')
            ->findOrFail($id);

        return view('menu.editMenu',compact('menu','allMenu','allPost','lastOrderNumber'));
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
            'menuName' => 'required|max:255',
            'menuStatus' => 'required|max:50',
            'orderNumber' => 'required|unique:menu,orderNumber,'.$id.',menuId',

        ];

        $messages = [
            // 'dimensions' => 'Image dimention should be over 800px',
        ];

        $validator = Validator::make($request->all(), $rules,$messages)->validate();

        $menu=Menu::findOrFail($id);

        $menu->menuName=$request->menuName;
        $menu->parentId=$request->parentId;
        $menu->postId=$request->postId;
        $menu->menuType=$request->menuType;
        $menu->menuStatus=$request->menuStatus;
        $menu->orderNumber=$request->orderNumber;
//        $menu->insertedBy=Auth::user()->name;
        $menu->lastModifiedBy=Auth::user()->name;
//        $menu->insertedDate=date(now());
        $menu->lastModifiedDate=date(now());

        $menu->save();

        Session::flash('message', 'Menu Updated successfully');

        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete(Request $request)
    {
        $menu=Menu::findOrFail($request->id);
        $menu->menuStatus='Deleted';
        $menu->save();
    }
}
