<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\logo;
use App\user;
use App\mission;
use App\slider;
use App\contact;
use App\vision;
use App\news;
use App\service;
use App\communicate;
use Session;
use Mail;
class frontendcontroller extends Controller
{
   public function index(){
    //$data['contact']=logo::orderBy('id','desc')->get();
    //return $data;

    //return $data;
    $mission=mission::orderBy('id','desc')->get();
    $slider=slider::orderBy('id','desc')->get();
    $slider=slider::orderBy('id','desc')->get();
    $news=news::orderBy('id','desc')->get();
    $service=service::orderBy('id','desc')->get();
    $contact=contact::first();
    $vision=vision::first();
    //$data=logo::orderBy('id','desc')->get();
    //return $mission;
   	return view('frontend.layouts.home',compact('mission','slider','contact','vision','news','service'));
   }


   public function about(){
    $contact=contact::first();

   	return view('frontend.single_page.about',compact('contact'));
   }

   public function detil($id){
    $contact=contact::first();
    $detil=news::find($id);
    return view('frontend.single_page.detil',compact('detil','contact'));
   }

    public function contact(){
      $contact=contact::first();

   	return view('frontend.single_page.contact',compact('contact'));
   }

   public function mission(){
    $contact=contact::first();
    $mission=mission::first();

    return view('frontend.single_page.mission',compact('contact','mission'));
   }


    public function news(){
      
       $contact=contact::first();
        $news=news::orderBy('id','desc')->get();

    return view('frontend.single_page.news',compact('news','contact'));
   }


    public function store(request $request){
    
    //return $request;
    $request->validate([
          'mobile'=>'required|unique:users,name|min:4',
         ]);

      $store=communicate::create([
          'address'=>$request->address,
          'email'=>$request->email,
          'mobile'=>$request->mobile,
          'name'=>$request->name,
          'message'=>$request->message,
        ]);

      $data=array(
        'name'=>$request->name,
        'email'=>$request->email,
        'mobile'=>$request->mobile,
        'address'=>$request->address,
        'message'=>$request->message
        
      );
       Mail::send('frontend.single_page.mail',$data, function($message)use($data){
        $message->from('ranamasud@gmail.com')
                 ->to($data['email'])
                ->subject('Thanks');


       });

        Session::flash('success', 'Message has sent successfully');
        return back();
    
   }


}
