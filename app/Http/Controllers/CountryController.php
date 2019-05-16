<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\country;
use\DB;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $get_country = country::all();
        return view('system_mgmt/country/index')->with('country_data',$get_country);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('system_mgmt/country/create');
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
            'country_name'=>'required', 
            'country_code'=>'required',   
           ]); 

        $post = new country;
        $post->country_name = $request['country_name'];
        $post->country_code = $request['country_code'];
        $post->save();
       // echo $request['country_name'];
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
        $get_countries = DB::table('tbl_country')->where('country_id',$id)->get();
       // var_dump( $get_countries );
        return view('system_mgmt.country.edit')->with('get_countries',$get_countries);      
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
        DB::table('tbl_country')->where('country_id',$id)->update(['country_name'=>$request->input('country_name'),'country_code'=>$request->input('country_code')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tbl_country')->where('country_id',$id)->delete();
        //echo $id;
    }
}
