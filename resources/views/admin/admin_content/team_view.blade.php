@extends('admin.admin_master')
@section('content')


              <!-- page start-->
              <section class="panel">
                  <header class="panel-heading">
                      VIEW TEAM MEMBERS
			<strong style="color:green; margin-left:20px;font-size:15px !important">
                <?php
                $update = Session::get('update');
                if(isset($update)){
                    echo $update;
                    Session::put('update',NULL);
                }
                ?>
            </strong>
			<strong style="color:green; margin-left:20px;font-size:15px !important">
                <?php
                $delete = Session::get('delete');
                if(isset($delete)){
                    echo $delete;
                    Session::put('delete',NULL);
                }
                ?>
            </strong>
                  </header>
                  <div class="panel-body">
                      <div class="adv-table editable-table ">
                        
                          <div class="space15"></div>
                          <table class="table table-striped table-hover table-bordered" id="editable-sample">
                              <thead>
                              <tr>
                                  <th>Full Name</th>                            
                                  <th>Designation</th>
                                  <th>Member Image</th>
                                  <th>Status</th>
                                  <th style="width:150px;">Action</th>
                                  
                              </tr>
                              </thead>
                              <tbody>
							   @foreach($all_team as $v_team)
                              <tr class="">
                                  <td class="center">{{$v_team->full_name}}</td>
                                  <td class="center">{{$v_team->designation}}</td>
                                  <td class="center"><img src="{{URL::to($v_team->image)}}" style="width:50px;height:50px;"></td>
                                  <td class="center">
								  @if($v_team->status==1)
									<button type="button" class="btn btn-success btn-xs">PUBLISHED</button>                                    
                                  @else
								   <button type="button" class="btn btn-default btn-xs">UNPUBLISHED</button>                                   
                                  @endif
								  
								  </td>
                                  <td style="width:150px;">
								        @if($v_team->status==1)
								        <a  href="{{URL::to('/unpublish-team-member/'.$v_team->team_id)}}">
								          <button type="button" class="btn btn-default" title="Unpublished ?"><i class="fa fa-thumbs-down"></i></button>
								        </a>
										@else
								        <a  href="{{URL::to('/publish-team-member/'.$v_team->team_id)}}">
								          <button type="button" class="btn btn-success" title="Published ?"><i class="fa fa-thumbs-up"></i></button>
								        </a>
										 @endif
								        <a  href="{{URL::to('/edit-team-member/'.$v_team->team_id)}}">
								          <button type="button" class="btn btn-info" title="Edit ?"><i class="fa fa-edit"></i></button>
								        </a>
										<a onclick="return confirm('Are you sure to delete this ?')" href="{{URL::to('/delete-team-member/'.$v_team->team_id)}}">
								          <button  type="button" class="btn btn-danger" title="Delete ?"><i class="fa fa-trash-o"></i></button>
								        </a>
								  </td>
                                  
                              </tr>
                              @endforeach
                              </tbody>
                          </table>
                      </div>
                  </div>
              </section>
              <!-- page end-->
         
	  @endsection