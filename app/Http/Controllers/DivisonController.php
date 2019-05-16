<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\divisonmodel;
use\DB;
class divisonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $divison_data = divisonmodel::all();
        return view('system_mgmt.divison.index')->with('data_divison',$divison_data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // echo'hiii';
        return view('system_mgmt/divison/create');
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
            'divison_name'=>'required'
        ]);

        $post = new divisonmodel;
        $post->divison_name=$request['divison_name'];
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
         $divison_data = DB::table('divison')->where('divison_id',$id)->get();
        return view('system_mgmt.divison.edit')->with('divison_show',$divison_data);
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
        $update_data = DB::table('divison')
        ->where('divison_id',$id)->update(['divison_name'=>$request->input('divison_name')]);
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('divison')->where('divison_id',$id)->delete();
        //$post=divisonmodel::find($id);
        //var_dump($post);
    }
}
