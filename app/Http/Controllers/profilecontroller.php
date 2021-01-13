<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Session;
use Hash;

class profilecontroller extends Controller


{
    public function view(){
    	$id=Auth::user()->id;

    	$profile=User::find($id);

    	//return $profile;

    	return view('backend.profile.view_profile',compact('profile'));
    }


     public function edit(){
    	$id=Auth::user()->id;

    	$profile=User::find($id);

    	//return $profile;

    	return view('backend.profile.edit_profile',compact('profile'));
    }




      public function update(request $request){

      $id=Auth::user()->id;

      $user=User::find($id);

       if ($request->hasfile('image')){

      $image=$request->file('image');
      unlink(public_path('profile/'.$user->image));

      //dd($image);

      $rand=rand(100,1000);
      $ex=$image->getClientOriginalExtension();
      $name=$rand.'.'.$ex;
      $location=public_path('Profile/');
      $upload=$image->move($location,$name);
     
    }


     //return $request;

     $request->validate([
          'email'=>'required|unique:users,name|min:4',
     ]);


          $user->name=$request->name;
        	$user->role=$request->role;
        	$user->email=$request->email;
        	
        	$user->mobile=$request->mobile;
        	$user->address=$request->address;
        	$user->gender=$request->gender;
        	$user->image=$name;
     

         $user->save();
        	
    	//return $data;
       Session::flash('success', 'User has update successfully');
   	   return redirect()->route('profile.view');
   	 }



   	 public function password(){

    	return view('backend.profile.password');
    }


    public function password_change(request $request){

    		$id=Auth::user()->id;
    		$db_pass=Auth::user()->password;
    		//return $db_pass;
    		$old_pass=$request->old;

    		$new_pass=$request->new;

    		
    		$con_pass=$request->confarm;
    		//return $con_pass;

    		if(Hash::check($old_pass,$db_pass)){
    		if($new_pass===$con_pass){

    			

    		$user=User::find($id);
    		$user->password=bcrypt($request->new);
    		$user->save();

    		Session::flash('success', 'password has update successfully');
   	        return redirect()->route('profile.view');
} else{

	Session::flash('success', 'password does not match');
    return redirect()->back();


}

   }

  else{
     Session::flash('success', 'password is not correct');
     return redirect()->back();

    }

    	
    }


   /* public function password_chang(request $request){

    	if(Auth::attempt(['id'=>Auth::user()->id,'password'=>$request->new])){

    		$user=User::find(Auth()->id);
    		$user->password=bcrypt($request->new);
    		$user->save();
    		Session::flash('success', 'password has update successfully');
   	        return redirect()->route('profile.view');

    	}
    	else{

         
    	}
    }*/




}