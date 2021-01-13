@extends('backend.layouts.header')

@section('content')

<!-- content HEADER -->
<!-- ========================================================= -->
<div class="content-header">
  <!-- leftside content header -->
  <div class="leftside-content-header">
    <ul class="breadcrumbs">
      <li><i class="fa fa-home" aria-hidden="true"></i><a href="">Dashboard</a></li>
      <li><a href="javascript:avoid(0)">Profile</a></li>
      <li><a href="javascript:avoid(0)">Manage-profile</a></li>
    </ul>
  </div>
</div>
<!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
<div class="row animated fadeInUp">


 <div class="row"> 

  <div class="col-sm-12 col-md-12 col-md-offset-">
   @include('backend.error_message')
   <div class="panel b-primary bt-md">
    <div class="panel-content">
      <div class="row">
        <div class="col-xs-6">
          <h4 class="text-success">Manage profile</h4>
        </div>
        <div class="col-xs-6 text-right">
         <a class="btn btn-primary " href="{{route('user.create')}}">Add user</a> 

       </div>
     </div>
     <div class="row ">
      <div class="col-md-12">

        <div class="card">
          <img src="{{asset('profile/'.Auth::user()->image)}}" alt="JMasud" style="width:50px"><br>
          <h1>{{$profile->name}}</h1>
          <h2>{{$profile->address}}</h2>
          <h2>{{$profile->gender}}</h2>
          <h2>{{$profile->mobile}}</h2>
          <a href="#"><i class="fa fa-dribbble"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-facebook"></i></a>
          <button><a href="{{route('profile.edit')}}" class="text-primary">Update</a></button>
        </div>
      
    </div>
  </div>
</div>
</div>

</div>


<!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
@endsection