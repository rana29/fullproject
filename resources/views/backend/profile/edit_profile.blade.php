@extends('backend.layouts.home')

@section('content')

                <!-- content HEADER -->
                <!-- ========================================================= -->

                <div class="content-header">
                    <!-- leftside content header -->
                    <div class="leftside-content-header">
                        <ul class="breadcrumbs">
                            <li><i class="fa fa-home" aria-hidden="true"></i><a href="">Dashboard</a></li>
                            <li><a href="javascript:avoid(0)">User</a></li>
                            <li><a href="javascript:avoid(0)">Update-user</a></li>
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
                                        <div class="col-xs-6"><h4 class="text-success">User update Form</h4></div>
                                        <div class="col-xs-6 text-right">
                                           <a class="btn btn-primary " href="{{route('profile.view')}}">Your profile</a> 

                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-12">
                                          <form class="form-horizontal" method="post" action="{{route('profile.update')}}" enctype="multipart/form-data">
                                                @csrf

                                                

                                                <div class="form-group">
                                                    <label for="email2" class="col-sm-3 control-label"> Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="name" id="email2" placeholder="Name" value="{{$profile->name}}">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="email2" class="col-sm-3 control-label">Role</label>
                                                    <div class="col-sm-9">
                                                        <select  class="form-control" name=role>
                                                            <option value="" >Select role</option>
                                                            
                                                            <option value="admin" {{($profile->role=="admin")?"selected":""}}>Admin</option>
                                                            <option value="user" {{($profile->role=="user")?"selected":""}}>User</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                 <div class="form-group">
                                                    <label for="email2" class="col-sm-3 control-label">Email</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="email" id="email2" placeholder="Email" value="{{$profile->email}}">
                                                    </div>
                                                </div>

                                               

                                              

                                                 <div class="form-group">
                                                    <label for="email2" class="col-sm-3 control-label">Mobile No</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="mobile" id="email2" placeholder="Mobile No" value="{{$profile->mobile}}">
                                                    </div>
                                                </div>

                                                 <div class="form-group">
                                                    <label for="email2" class="col-sm-3 control-label">Address</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="address" id="email2" placeholder="Address" value="{{$profile->address}}">
                                                    </div>
                                                </div>


                                                  <div class="form-group">
                                                    <label for="email2" class="col-sm-3 control-label">Gender</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="gender" id="email2" placeholder="Gender" value="{{$profile->gender}}">
                                                    </div>
                                                </div>

                                                 <div class="form-group">
                                                    <label for="email2" class="col-sm-3 control-label">Image</label>
                                                    <div class="col-sm-9">
                                                        <input type="file" class="form-control" name="image" id="image" >
                                                    </div>
                                                 </div>

                                         
                                               
                                                    <div class="col-md-2 form-group">
                                                       <img src="" id="imageshow" style="width:80px; height: 80px; border:2px solid gray">
                                                    </div>
                                                
                                                
                                                <div class="form-group">
                                                    <div class="col-sm-offset-3 col-sm-9 ">
                                                        <button type="submit" class="btn btn-primary ">Update</button>
                                                    </div>
                                                </div>

                                               <button id="rana">A</button>


                                                      <!---------------- data modal for delete -------------------------->

                                                 <div class="modal fade" id="rana{{$profile->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <h5 class="modal-title text-primary" id="exampleModalLabel">Are you sure to update?</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                      </button>
                                                  </div>
                                                  <div class="modal-body">
                                                  
                                                  <div class="modal-footer">
                                                          <button type="submit" name="submit" class="btn btn-secondary text-info">yes</button>
                                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                                      </div>
                                                  </div>
                                          </div>
                                      </div>
                                      </div>



                                              
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
@endsection




