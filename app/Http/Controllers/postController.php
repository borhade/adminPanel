<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data = post::orderBy('id','desc')->get();   
        //$data = post::all();    
       return view('post.index')->with('user_data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('post.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $this->validate($request,[
            'name'=>'required',
            'title'=>'required',
             'body'=>'required'
        ]);

        $post =  new post;
        $post->name = $request->input('name');
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();
        return redirect('/create');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_data = post::find($id);
        return view('post.edit')->with('edit_data',$edit_data);    
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

               'name'=>'required',
               'title'=>'required',
               'body'=>'required'
          ]);

         $post = post::find($id);
        // $post = new post;
         $post->name = $request->input('name');
         $post->title = $request->input('title');
         $post->body = $request->input('body');
         $post->save();
         return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post =post::find($id); 
        $post->delete(); 
    }

    public function display($id){
        $data=post::find($id);
        return view('post.show')->with('single_data',$data);

    }
}
