<?php

namespace App\Http\Controllers\Admin;
use App\Model\admin\permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permission = Permission::all();
        return view('layouts.admin.permission.show',compact('permission'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $permission=permission::all();
      return view('layouts.admin.permission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //return $request->all();
      $this->validate($request,[
      'name'=>'required|max:20|unique:permissions'
      // 'unique:roles'...roles is the table name. It allows unique role name in the table

    ]);

      $permissions = new permission;
      $permissions->name = $request->name;
      $permissions->save();
      return redirect(route('permission.index'))->with('message','Permission Created successfuly');
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
    public function edit(permission $permission)
    {
      $permission=permission::find($permission->id);//->first();
        return view('layouts.admin.permission.edit',compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, permission $permission)
    {
      //return $request->all();
      $this->validate($request,[
      'name'=>'required|max:20'

    ]);

      $permission = permission::find($permission->id);
      $permission->name = $request->name;
      $permission->update();
      return redirect(route('permission.index'))->with('message','Permission updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(permission $permission)
    {
      permission::where('id',$permission->id)->delete();
      return redirect()->back()->with('message','Permission Deleted successfuly');
    }
}
