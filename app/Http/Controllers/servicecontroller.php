<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\service;
use Auth;
use Session;
use Hash;
use Image;

class servicecontroller extends Controller
{
    public function view(){
    	$data=service::orderBy ('id','desc')->get();
    	//return $data;
    	return view('backend.service.view_service',compact('data'));
    }


     public function create(){
    	
    	//return $data;
    	return view('backend.service.create_service');
    }


     public function store(Request $request){




     	//return $request;

     	 $request->validate([
          'title'=>'required|unique:users,name|min:4',
         ]);

    	$store=service::create([
        	'title'=>$request->title,
            'subtitle'=>$request->subtitle,
            'created'=>Auth::user()->id,
            'updated'=>Auth::user()->id,
        	
        	
        	]);

    	//return $data;
    		Session::flash('success', 'service has added successfully');
   	        return back();
    }

    public function edit($id){

    	$edit=service::find($id);

    	//return $data;

    	return view('backend.service.update_service',compact('edit'));

    }





      public function update(Request $request,$id){

      $service=service::find($request->id);
     	//return $request;
    
    $request->validate([
    'title'=>'required|unique:users,name|min:4',
    ]);

          

     $service->title=$request->title;
     $service->subtitle=$request->subtitle;
     
     
     $service->save();

     
    



          
  //return $data;
    		Session::flash('success', 'service has update successfully');
   	        return redirect()->route('service.view');
    }




    public function delete($id){

    	$delete=service::find($id);
      
    	$delete->delete();
        Session::flash('success', 'service has delete successfully');
        return back(); 
    }
}
