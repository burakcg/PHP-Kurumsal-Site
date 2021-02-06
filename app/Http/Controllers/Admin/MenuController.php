<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = DB::table('menus')->get();

        return view('admin.menu', ['datalist' => $datalist]);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $datalist= DB::table('menus')->get()->where('parent_id',0);
        return view('admin.menu_add',['datalist'=>$datalist]);
    }
    /**
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        Menu::create($request->all());

       /* DB::table('menus')->insert([
            'parent_id'=>$request->input('parent_id'),
            'title'=>$request->input('title'),
            'keywords'=>$request->input('keywords'),
            'description'=>$request->input('description'),

            'status'=>$request->input('status')
        ]);*/
        return redirect()->route('admin_category');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
     * @param   int $id

     */
    public function edit($id)
    {
        $data = Menu::find($id);
        $datalist=Menu::where('parent_id',0)->get();
        return view('admin.menu_edit',['data'=>$data,'datalist'=>$datalist]);
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
        $data = Menu::find($id);

        $data->title = $request->input('title');
        $data->parent_id = $request->input('parent_id');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->status = $request->input('status');
        $data->save();
        return  redirect()->route('admin_category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('menus')->where('id', '=', $id)->delete();
        return  redirect()->route('admin_category');
    }

}
