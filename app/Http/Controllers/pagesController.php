<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
   public function index(){
   	$title='This is index Page';
	 return view('pages.index')->with('title',$title);
   }

 
 public function about(){
 	$title='This is about Page';
   return view('pages.about')->with('title',$title);
 } 

 public function services(){
 	$data=array(

 		'title'=>'service page',
 		'services'=>['web_design','html','css']		
 	);
   return view('pages.services')->with($data);
 }

 public function show(){

 	echo "hiii";
 }


}
