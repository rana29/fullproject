<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\news;
use Auth;
use Session;
use Hash;
use Image;

class newscontroller extends Controller
{
     public function view(){
    	$data=news::orderBy ('id','desc')->get();
    	//return $data;
    	return view('backend.news.view_news',compact('data'));
    }


     public function create(){
    	
    	//return $data;
    	return view('backend.news.create_news');
    }


     public function store(Request $request){

      if ($request->hasfile('image')){

      $image=$request->file('image');
    

      //dd($image);

      $rand=rand(100,1000);
      $ex=$image->getClientOriginalExtension();
      $name=$rand.'.'.$ex;

      //return $name;
      $location=public_path('news/');
      $upload=$image->move($location,$name);
      
    }


     	//return $request;

     	 $request->validate([
          'title'=>'required|unique:users,name|min:4',
         ]);

    	$store=news::create([
        	'title'=>$request->title,
          'Date'=>$request->date,
        	
        	'image'=>$name,
        	]);

    	//return $data;
    		Session::flash('success', 'news has added successfully');
   	        return back();
    }

    public function edit($id){

    	$edit=news::find($id);

    	//return $data;

    	return view('backend.news.update_news',compact('edit'));

    }





      public function update(Request $request,$id){

      $news=news::find($request->id);
     	//return $request;
      if ($request->hasfile('image')){

      $image=$request->file('image');
    
       //unlink(public_path('news/'.$news->image));
      //dd($image);

      $rand=rand(100,1000);
      $ex=$image->getClientOriginalExtension();
      $name=$rand.'.'.$ex;

      //return $name;
      $location=public_path('news/');
      $upload=$image->move($location,$name);
      
    }
    $request->validate([
    'title'=>'required|unique:users,name|min:4',
    ]);

          

     $news->title=$request->title;
     
     $news->image=$name;
     $news->save();

     
    



          
  //return $data;
    		Session::flash('success', 'news has update successfully');
   	        return redirect()->route('news.view');
    }




    public function delete($id){

    	$delete=news::find($id);
      unlink(public_path('news/'.$delete->image));
    	$delete->delete();
        Session::flash('success', 'news has delete successfully');
        return back(); 
    }
}
