{{-- <div class="col-sm-6">
            <h3 class="m-t-none m-b">Address</h3>
            {!! Form::open(['action'=>'postsController@store','method'=>'post','id'=>''])!!}   
                <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
              </div>
              <div class="form-group">
                  <label for="title">title:</label>
                  <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
              </div>
              <div class="form-group">
                  <label for="body">body:</label>
                  <input type="text" class="form-control" id="body" placeholder="Enter body" name="body">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>  
          {!!Form::close()!!}
        </div> --}}
@extends('layouts.app')
 @section('content')
           <div id="page-wrapper" class="gray-bg dashbard-1">
                  <div class="row border-bottom">
                  <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                  <div class="navbar-header">
                      <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                      <form role="search" class="navbar-form-custom" action="search_results.html">
                          <div class="form-group">
                              <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                          </div>
                      </form>
                  </div>
                      {{-- <ul class="nav navbar-top-links navbar-right">
                          <li style="padding: 20px">
                              <span class="m-r-sm text-muted welcome-message">Welcome to INSPINIA+ Admin Theme.</span>
                          </li>
                          <li class="dropdown">
                              <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                  <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                              </a>
                              <ul class="dropdown-menu dropdown-messages dropdown-menu-right">
                                  <li>
                                      <div class="dropdown-messages-box">
                                          <a class="dropdown-item float-left" href="profile.html">
                                              <img alt="image" class="rounded-circle" src="img/a7.jpg">
                                          </a>
                                          <div class="media-body">
                                              <small class="float-right">46h ago</small>
                                              <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                              <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="dropdown-divider"></li>
                                  <li>
                                      <div class="dropdown-messages-box">
                                          <a class="dropdown-item float-left" href="profile.html">
                                              <img alt="image" class="rounded-circle" src="img/a4.jpg">
                                          </a>
                                          <div class="media-body ">
                                              <small class="float-right text-navy">5h ago</small>
                                              <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                              <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="dropdown-divider"></li>
                                  <li>
                                      <div class="dropdown-messages-box">
                                          <a class="dropdown-item float-left" href="profile.html">
                                              <img alt="image" class="rounded-circle" src="img/profile.jpg">
                                          </a>
                                          <div class="media-body ">
                                              <small class="float-right">23h ago</small>
                                              <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                              <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="dropdown-divider"></li>
                                  <li>
                                      <div class="text-center link-block">
                                          <a href="mailbox.html" class="dropdown-item">
                                              <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                          </a>
                                      </div>
                                  </li>
                              </ul>
                          </li>
                          <li class="dropdown">
                              <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                  <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                              </a>
                              <ul class="dropdown-menu dropdown-alerts">
                                  <li>
                                      <a href="mailbox.html" class="dropdown-item">
                                          <div>
                                              <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                              <span class="float-right text-muted small">4 minutes ago</span>
                                          </div>
                                      </a>
                                  </li>
                                  <li class="dropdown-divider"></li>
                                  <li>
                                      <a href="profile.html" class="dropdown-item">
                                          <div>
                                              <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                              <span class="float-right text-muted small">12 minutes ago</span>
                                          </div>
                                      </a>
                                  </li>
                                  <li class="dropdown-divider"></li>
                                  <li>
                                      <a href="grid_options.html" class="dropdown-item">
                                          <div>
                                              <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                              <span class="float-right text-muted small">4 minutes ago</span>
                                          </div>
                                      </a>
                                  </li>
                                  <li class="dropdown-divider"></li>
                                  <li>
                                      <div class="text-center link-block">
                                          <a href="notifications.html" class="dropdown-item">
                                              <strong>See All Alerts</strong>
                                              <i class="fa fa-angle-right"></i>
                                          </a>
                                      </div>
                                  </li>
                              </ul>
                          </li>
                          <li>
                              <a href="login.html">
                                  <i class="fa fa-sign-out"></i> Log out
                              </a>
                          </li>
                          <li>
                              <a class="right-sidebar-toggle">
                                  <i class="fa fa-tasks"></i>
                              </a>
                          </li>
                      </ul> --}}
                  </nav>
                  </div>
                  <div class="wrapper wrapper-content animated fadeInRight">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox ">
                                <div class="ibox-title">
                                    <h5>State Management</h5>
                                    <div class="ibox-tools">
                                        <a class="collapse-link">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                            <i class="fa fa-wrench"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-user">
                                            <li><a href="#" class="dropdown-item">Config option 1</a>
                                            </li>
                                            <li><a href="#" class="dropdown-item">Config option 2</a>
                                            </li>
                                        </ul>
                                        <a class="close-link">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                </div>
                                {{-- $countries}} --}}
                                <div class="ibox-content">
                                    <form method="post" action="{{route('state.store')}}">
                                      {{csrf_field()}}
                                        <div class="form-group  row"><label class="col-sm-2 col-form-label">State Name</label>
                                            <div class="col-sm-10">
                        <input type="text" class="form-control" name="state_name"></div>
                                        </div>

                                        <div class="form-group row">
                                          <label class="col-sm-2 col-form-label">Country</label>
                                            <div class="col-sm-10">
                                                <select class="form-control m-b" name="country_name">
                                                   <option value="">select Country</option>
                                                  @foreach($countries as $country_data)
                                                      <option value="{{$country_data->country_id}}">{{$country_data->country_name}}</option>
                                                  @endforeach
                                              </select>
                                          </div>
                                       </div> 
                                     <div class="hr-line-dashed"></div>
                                        <div class="form-group row">
                                            <div class="col-sm-4 col-sm-offset-2">
                                                <button class="btn btn-primary btn-sm" type="submit">Create</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          @endsection     