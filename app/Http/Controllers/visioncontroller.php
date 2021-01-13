<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vision;
use Auth;
use Session;
use Hash;
use Image;

class visioncontroller extends Controller
{
     public function view(){
    	$data=vision::orderBy ('id','desc')->get();
    	//return $data;
    	return view('backend.vision.view_vision',compact('data'));
    }


     public function create(){
    	
    	//return $data;
    	return view('backend.vision.create_vision');
    }


     public function store(Request $request){

      if ($request->hasfile('image')){

      $image=$request->file('image');
    

      //dd($image);

      $rand=rand(100,1000);
      $ex=$image->getClientOriginalExtension();
      $name=$rand.'.'.$ex;

      //return $name;
      $location=public_path('vision/');
      $upload=$image->move($location,$name);
      
    }


     	//return $request;

     	 $request->validate([
          'title'=>'required|unique:users,name|min:4',
         ]);

    	$store=vision::create([
        	'title'=>$request->title,
        	
        	'image'=>$name,
        	]);

    	//return $data;
    		Session::flash('success', 'vision has added successfully');
   	        return back();
    }

    public function edit($id){

    	$edit=vision::find($id);

    	//return $data;

    	return view('backend.vision.update_vision',compact('edit'));

    }





      public function update(Request $request,$id){

      $vision=vision::find($request->id);
     	//return $request;
      if ($request->hasfile('image')){

      $image=$request->file('image');
    
       //unlink(public_path('vision/'.$vision->image));
      //dd($image);

      $rand=rand(100,1000);
      $ex=$image->getClientOriginalExtension();
      $name=$rand.'.'.$ex;

      //return $name;
      $location=public_path('vision/');
      $upload=$image->move($location,$name);
      
    }
    $request->validate([
    'title'=>'required|unique:users,name|min:4',
    ]);

          

     $vision->title=$request->title;
     
     $vision->image=$name;
     $vision->save();

     
    



          
  //return $data;
    		Session::flash('success', 'vision has update successfully');
   	        return redirect()->route('vision.view');
    }




    public function delete($id){

    	$delete=vision::find($id);
        unlink(public_path('vision/'.$delete->image));
    	$delete->delete();
        Session::flash('success', 'vision has delete successfully');
        return back(); 
    }
}
