<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use DB;
use Auth;
class postsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        //$data = DB::select('select * from posts');
        $data = post::orderBy('id','desc')->get();
        //return post::where('id',)
        //$title='Post data from Database';
        return view('post.index')->with('posts',$data);
   
    }

    public function display($id){
      $show_data = post::find($id); 
      return view('post.show')->with('single_data',$show_data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
      return view('post.add');

        //echo"hiii";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $user = Auth::user();
        print($user->id);

        /*$this->validate($request,[
            'name'=>'required',
            'title'=>'required',
            'body'=>'required',
        ]);
        //create post
        $post = new post;
        $post->name = $request->input('name');
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id =  Auth::user()->id;
        $post->save();
        return redirect('/create')->with('message','Post Instered Successfully!');*/

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('post.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $Edit_data = post::find($id);
       return view('post.edit')->with('edit_data',$Edit_data );
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
              'body'=>'required',  
          ]);
         $post = post::find($id);
        $post->name= $request->input('name');
        $post->title=$request->input('title');
        $post->body=$request->input('body');
        $post->save();
        //return redirect('/posts/'.$id.'/edit');
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

        $post=post::find($id);
        $post->delete();
        return redirect('/posts');
    
    }
}
