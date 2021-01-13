<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mission;
use Auth;
use Session;
use Hash;
use Image;

class missioncontroller extends Controller
{
    public function view(){
    	$data=mission::orderBy ('id','desc')->get();
    	//return $data;
    	return view('backend.mission.view_mission',compact('data'));
    }


     public function create(){
    	
    	//return $data;
    	return view('backend.mission.create_mission');
    }


     public function store(Request $request){

      if ($request->hasfile('image')){

      $image=$request->file('image');
    

      //dd($image);

      $rand=rand(100,1000);
      $ex=$image->getClientOriginalExtension();
      $name=$rand.'.'.$ex;

      //return $name;
      $location=public_path('mission/');
      $upload=$image->move($location,$name);
      
    }


     	//return $request;

     	 $request->validate([
          'title'=>'required|unique:users,name|min:4',
         ]);

    	$store=mission::create([
        	'title'=>$request->title,
         
        	
        	'image'=>$name,
        	]);

    	//return $data;
    		Session::flash('success', 'Mission has added successfully');
   	        return back();
    }

    public function edit($id){

    	$edit=mission::find($id);

    	//return $data;

    	return view('backend.mission.update_mission',compact('edit'));

    }





      public function update(Request $request,$id){

      $mission=mission::find($request->id);
     	//return $request;
      if ($request->hasfile('image')){

      $image=$request->file('image');
    
       //unlink(public_path('mission/'.$mission->image));
      //dd($image);

      $rand=rand(100,1000);
      $ex=$image->getClientOriginalExtension();
      $name=$rand.'.'.$ex;

      //return $name;
      $location=public_path('mission/');
      $upload=$image->move($location,$name);
      
    }
    $request->validate([
    'title'=>'required|unique:users,name|min:4',
    ]);

          

     $mission->title=$request->title;
     
     $mission->image=$name;
     $mission->save();

     
    



          
  //return $data;
    		Session::flash('success', 'mission has update successfully');
   	        return redirect()->route('mission.view');
    }




    public function delete($id){

    	$delete=mission::find($id);
        unlink(public_path('mission/'.$delete->image));
    	$delete->delete();
        Session::flash('success', 'mission has delete successfully');
        return back(); 
    }
}
