  <!-- LEFT SIDEBAR -->
            <!-- ========================================================= -->
            @php
            $prefix=Request::route()->getPrefix();
            $route=Route::current()->getName();
            @endphp
         
                <div class="left-sidebar">
                <!-- left sidebar HEADER -->
                <div class="left-sidebar-header">
                    <div class="left-sidebar-title">Navigation</div>
                    <div class="left-sidebar-toggle c-hamburger c-hamburger--htla hidden-xs" data-toggle-class="left-sidebar-collapsed" data-target="html">
                        <span></span>
                    </div>
                </div>
                <!-- NAVIGATION -->
                <!-- ========================================================= -->
                <div id="left-nav" class="nano">
                    <div class="nano-content">
                        <nav>
                            <ul class="nav nav-left-lines" id="main-nav">
                                <!--HOME-->
                                <li class="active-item"><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i><span>Dashboard</span></a></li>
                                <!--UI ELEMENTENTS-->

                                @if(Auth::user()->role=="admin")
                                <li class="has-child-item close-item {{($prefix=='/user')?'open-item':''}}">
                                    <a><i class="fa fa-cubes " aria-hidden="true"></i><span>Manage User</span></a>
                                    <ul class="nav child-nav level-1">
                                        <li><a href="{{route('user.view')}}" class="{{($route=='user.view')? 'active-item':''}}">view user</a></li>
                                        <li><a href="{{route('user.create')}}">create user</a></li>
                                       
                                      
                                    </ul>
                                </li>
                                @endif

                                  <li class="has-child-item close-item has-child-item ">
                                    <a><i class="fa fa-cubes  {{($prefix=='/profile')?'open-item':''}}}}" aria-hidden="true"></i><span>Profile</span></a>
                                    <ul class="nav child-nav level-1">
                                        <li><a href="{{route('profile.view')}}" class="{{($route=='profile.view')? 'active-item':''}}">view profile</a></li>
                                        <li><a href="{{route('profile.password')}}">change password</a></li>
                                      
                                       
                                      
                                    </ul>
                                </li>



                                 <li class="has-child-item close-item has-child-item ">
                                    <a><i class="fa fa-cubes  {{($prefix=='/logo')?'open-item':''}}}}" aria-hidden="true"></i><span>Logo</span></a>
                                    <ul class="nav child-nav level-1">
                                        <li><a href="{{route('logo.view')}}" class="{{($route=='logo.view')? 'active-item':''}}">view logo</a></li>
                                        
                                      
                                       
                                      
                                    </ul>
                                </li>


                                 <li class="has-child-item close-item li close-item    {{($prefix=='/slider')?'open-item':''}}">
                                    <a><i class="fa fa-cubes" aria-hidden="true"></i><span>Slider</span></a>
                                    <ul class="nav child-nav level-1">
                                        <li><a href="{{route('slider.view')}}"  class="{{($route=='slider.view')? 'active-item':''}}">view slider</a></li>
                                        <li><a href="{{route('slider.create')}}" class="{{($route=='slider.create')? 'active-item':''}}">Add slider</a></li>
                                        
                                    </ul>
                                </li>


                                 <li class="has-child-item li close-item    {{($prefix=='/mission')?'open-item':''}}">
                                    <a><i class="fa fa-cubes" aria-hidden="true"></i><span>Mission</span></a>
                                    <ul class="nav child-nav level-1">
                                        <li><a href="{{route('mission.view')}}" class="{{($route=='mission.view')? 'active-item':''}}">View Mission</a></li>
                                        <li><a href="{{route('mission.create')}}" class="{{($route=='mission.view')? 'active-item':''}}">Add misssion</a></li>
                                        
                                    </ul>
                                </li>


                                  <li class="has-child-item close-item    {{($prefix=='/vision')?'open-item':''}}">
                                    <a><i class="fa fa-cubes" aria-hidden="true"></i><span>Vision</span></a>
                                    <ul class="nav child-nav level-1">
                                        <li><a href="{{route('vision.view')}}"   class="{{($route=='vision.view')? 'active-item':''}}">View vision</a></li>
                                        <li><a href="{{route('vision.create')}}"  class="{{($route=='vision.create')? 'active-item':''}}">Add vision</a></li>
                                        
                                    </ul>
                                </li>

                                  <li class="has-child-item close-item   {{($prefix=='/news')?'open-item':''}}">
                                    <a><i class="fa fa-cubes" aria-hidden="true"></i><span>News</span></a>
                                    <ul class="nav child-nav level-1">
                                        <li><a href="{{route('news.view')}}" class="{{($route=='news.view')? 'active-item':''}}">View news</a></li>
                                        <li><a href="{{route('news.create')}}" class="{{($route=='profile.create')? 'active-item':''}}">Add news</a></li>
                                        
                                    </ul>
                                </li>

                                <li class="has-child-item close-item  {{($prefix=='/service')?'open-item':''}}">
                                    <a><i class="fa fa-cubes" aria-hidden="true"></i><span>service</span></a>
                                    <ul class="nav child-nav level-1">
                                        <li><a href="{{route('service.view')}}" class="{{($route=='profile.view')? 'active-item':''}}">View service</a></li>
                                        <li><a href="{{route('service.create')}}" class="{{($route=='profile.create')? 'active-item':''}}">Add service</a></li>
                                        
                                    </ul>
                                </li>

                              <li class="has-child-item close-item {{($prefix=='/contact')?'open-item':''}}">
                                    <a><i class="fa fa-cubes" aria-hidden="true"></i><span>Contact</span></a>
                                    <ul class="nav child-nav level-1">
                                        <li><a href="{{route('contact.view')}}" class="{{($route=='profile.view')? 'active-item':''}}">View contact</a></li>
                                        <li><a href="{{route('contact.create')}}" class="{{($route=='profile.view')? 'active-item':''}}">Add contact</a></li>
                                        
                                    </ul>
                                </li>
                                <!--CHARTS-->
                                

                                <!--DOCUMENTATION-->
                               

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>