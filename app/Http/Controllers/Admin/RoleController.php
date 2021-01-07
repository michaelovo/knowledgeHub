<?php

namespace App\Http\Controllers\Admin;
use App\Model\admin\role;
use App\Model\admin\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth:admin');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $roles = role::all();

      //  return view('layouts.admin.tag.show',compact('posts'));
        return view('layouts.admin.role.show',compact('roles'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //$roles=role::all();
    $permissions = Permission::all();
      return view('layouts.admin.role.create',compact('permissions'));
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
      'name'=>'required|max:20|unique:roles'
      // 'unique:roles'...roles is the table name. It allows unique role name in the table

    ]);

      $roles = new role;
      $roles->name = $request->name;
      $roles->save();
      $roles->permissions()->sync($request->permission);
      return redirect(route('role.index'));
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
      $roles=role::where('id',$id)->first();
      $permissions = Permission::all();
        return view('layouts.admin.role.edit',compact('roles','permissions'));
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
      //return $request->all();
      $this->validate($request,[
      'name'=>'required|max:20'

    ]);

      $roles = role::find($id);
      $roles->name = $request->name;
      $roles->update();
      $roles->permissions()->sync($request->permission);// role and permission relationship sync
      /*  $roles->permissions()->sync($request->permission);// 'permissions' is the relationship name
      defined in the 'role' model while 'permissions' is the model name
      */

      return redirect(route('role.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      role::where('id',$id)->delete();
      return redirect()->back();

    }
}
