<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Usermodel;
use DB;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_data = Usermodel::all();
        return view('user_mgmt/index')->with('user_post', $user_data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user_mgmt/create');
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
           'user_name'=>'required',
           'email'=>'required',
           'first_name'=>'required', 
           'last_name'=>'required',
           'password'=>'required'
        ]);

        $user_post = new Usermodel(); 
        $user_post->username = $request->user_name;
        $user_post->email = $request->email;
        $user_post->firstname = $request->first_name;
        $user_post->lastname = $request->last_name;
        $user_post->password = $request->password;
        $user_post->save();   
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
        DB::table('users')->where('id',$id)->delete();  
     }
}
