<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\state;
use App\country;
use DB;
class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /*$state_data = DB::table('tbl_state')
                    ->join('tbl_country', 'tbl_state.country_id', '=', 'tbl_country.country_id')
                    ->select('tbl_state.*,tbl_country.*')
                    ->get();*/

       $state_data = DB::table('tbl_state')
            ->join('tbl_country', 'tbl_state.country_id', '=', 'tbl_country.country_id')
            ->select('tbl_state.state_id','tbl_state.state_name','tbl_country.country_name')
            ->get();               
       // $state_data = state::all();
       return view('system_mgmt/state/index')->with('state_data',$state_data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $country_name = country::all();
        return view('system_mgmt/state/create')->with('countries',$country_name);
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
                'state_name'=>'required',
                'country_name'=>'required'   
            ]);
        
        $post = new state();
        $post->state_name = $request['state_name'];
        $post->country_id = $request['country_name'];
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
         $country_data =country::all();       
        $state_tabledata = DB::table('tbl_state')->where('state_id',$id)->get(); 
        return view('system_mgmt.state.edit')->with(['countries'=>$country_data,'state_tabledata'=> $state_tabledata]); 

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
        DB::table('tbl_state')->where('state_id',$id)->update(['state_name'=>$request->input('state_name'),'country_id'=>$request->input('country_name')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tbl_state')->where('state_id',$id)->delete();
    }
}
