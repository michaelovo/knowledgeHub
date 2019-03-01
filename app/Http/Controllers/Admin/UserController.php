<?php

namespace App\Http\Controllers\Admin;
use App\Model\admin\admin;
use App\Model\admin\role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
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
          $users=admin::all();
          return view('layouts.admin.user.show',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles=role::all();
        //return $roles;
        return view('layouts.admin.user.create',compact('roles'));
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
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
        'password' => ['required', 'string', 'min:6', 'confirmed'],
        'phone' => ['required', 'string', 'max:15'],
      //  'cpassword'=>'required',
      //  'body'=>'required'
    ]);

    $request['password']=bcrypt($request->password); // BYCRYPT password
    $users=admin::create($request->all());
    return redirect(route('user.index'));
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
      $users=admin::where('id',$id)->first();
      $roles=role::all();

      return view('layouts.admin.user.edit',compact('users','roles'));
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
      $this->validate($request,[
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255'],
      //  'password' => ['required', 'string', 'min:6', 'confirmed'],
        'phone' => ['required', 'string', 'max:15'],
      //  'cpassword'=>'required',
      //  'body'=>'required'
    ]);

        $users =admin::where('id',$id)->update($request->except('_token','_method'));
          return redirect(route('user.index'))->with('message','User Updated succesfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      admin::where('id',$id)->delete();
      return redirect()->back()->with('message','User deleted succesfully');
    }
}
