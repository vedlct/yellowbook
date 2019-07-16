<?php

namespace App\Http\Controllers;

use App\Menu;
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
        $allMenu=Menu::select('menu.menuId','menu.menuName')->get();
        return view('menu.addMenu',compact('allMenu'));
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
            'orderNumber' => 'required',

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
        $allMenu=Menu::select('menu.menuId','menu.menuName')->where('menu.menuId','!=',$id)->get();
        $menu= Menu::select('menu.menuId','menu.menuName','menu.menuType','menu.insertedBy','menu.lastModifiedBy',
            'menu.lastModifiedDate', 'menu.menuStatus','menu.orderNumber','newMenu.menuName as parentMenu')
            ->leftJoin('menu as newMenu', 'newMenu.parentId', '=', 'menu.menuId')
            ->findOrFail($id);

        return view('menu.editMenu',compact('menu','allMenu'));
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
        //
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
}
