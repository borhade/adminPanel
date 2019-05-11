<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\city;
use App\state;
use DB;
class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $cities = DB::table('tbl_city')
            ->join('tbl_state', 'tbl_city.state_id', '=', 'tbl_state.state_id')
            ->select('tbl_city.city_name','tbl_city.city_id','tbl_city.created_at','tbl_state.state_name', 'tbl_state.state_id')
            ->get();           
       return view('system_mgmt/city/index')->with('city_data',$cities);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states = state::all();
        return view('system_mgmt/city/create')->with('state_name',$states);
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
            'city_name'=>'required'
        ]);

        $post = new city;
        $post->city_name = $request['city_name'];
        $post->state_id = $request['state_name'];
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
        //
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
        DB::table('tbl_city')->where('city_id',$id)->delete();
    }
}
