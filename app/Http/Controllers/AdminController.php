<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

    $search = $request->search;
        
    $data = Admin::select('id','name','username','role')
                ->when($search,function($query,$search){
                    return $query->where('name','like',"%{$search}%");
                })
                ->orderBy('id')
                ->paginate('10');

        return view('pages.Admin.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.Admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required|max:40|regex:/^[a-zA-ZÑñ\s\.]+$/|unique:admins',
            'username' =>  'required|max:40|regex:/^[a-zA-ZÑñ\s\.]+$/|alpha_dash|unique:admins',
            'password' => 'required|confirmed|min:4',
        ]);

        Admin::create([
           'name' => $request->name,
           'username' => $request->username,
           'password' => bcrypt($request->password),
           'role' => 'employee',
       ]);

       return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        return view('pages.Admin.edit',['item'=>$admin]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        $request->validate([
            'name' => "required|max:40|regex:/^[a-zA-ZÑñ\s\.]+$/|unique:admins,name,{$admin->id}",
            'username' => "required|max:40|regex:/^[a-zA-ZÑñ\s\.]+$/|alpha_dash|unique:admins,username,{$admin->id}",
            'password' => 'nullable|confirmed|min:4',
        ]);

        if ($request->password){
            $arr = [
                'name' => $request->name,
                'username' => $request->username,
                'password' => bcrypt($request->password),
            ];
        } else {
           
            $arr = [
                'name' => $request->name,
                'username' => $request->username,
            ];
          
        }

        $admin->update($arr);

        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        $admin->delete();
        return redirect()->route('admin.index');
    }

  
}
