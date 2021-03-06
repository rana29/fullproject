@extends('backend.layouts.home')

@section('content')

                <!-- content HEADER -->
                <!-- ========================================================= -->

                <div class="content-header">
                    <!-- leftside content header -->
                    <div class="leftside-content-header">
                        <ul class="breadcrumbs">
                            <li><i class="fa fa-home" aria-hidden="true"></i><a href="">Dashboard</a></li>
                            <li><a href="javascript:avoid(0)">service</a></li>
                            <li><a href="javascript:avoid(0)">Update-service</a></li>
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
                                        <div class="col-xs-6"><h4 class="text-success">service update Form</h4></div>
                                        <div class="col-xs-6 text-right">
                                           <a class="btn btn-primary " href="{{route('service.view')}}">Manage service</a> 

                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <form class="form-horizontal" method="post" action="{{route('service.update',$edit->id)}}" enctype="multipart/form-data">
                                                @csrf

                                                

                                                <div class="form-group">
                                                    <label for="email2" class="col-sm-3 control-label">Title</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="title" id="email2" placeholder="Name" value="{{$edit->title}}">
                                                    </div>
                                                </div>

                                                   <div class="form-group">
                                                    <label for="email2" class="col-sm-3 control-label"> subtitle</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="subtitle" id="email2" placeholder="Name" value="{{$edit->subtitle}}">
                                                    </div>
                                                </div>

                                                

                                                


                                               

                                                 
                                                
                                                <div class="form-group">
                                                    <div class="col-sm-offset-3 col-sm-9 ">
                                                        <button type="submit" class="btn btn-primary ">Update</button>
                                                    </div>
                                                </div>


                                                      <!---------------- data modal for delete -------------------------->

                                                 <div class="modal fade" id="rana{{$edit->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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


