<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\department;
use DB;
class departmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $department_data = department::all();
        return view('system_mgmt/department/index')->with('get_depatment',$department_data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
       return view('system_mgmt/department/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'depart_name'=>'required'
        ]);
        
        $post = new department;
        $post->dept_name = $request['depart_name'];
        $post->save();    
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
       $department_data = DB::table('tbl_dept')->where('dept_id',$id)->get();
       return view('system_mgmt.department.edit')->with('department_edit',$department_data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){

        DB::table('tbl_dept')->where('dept_id',$id)->update(['dept_name'=>$request->input('depart_name')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        DB::table('tbl_dept')->where('dept_id',$id)->delete();
    }
}
