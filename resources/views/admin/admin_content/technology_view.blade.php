@extends('admin.admin_master')
@section('content')


              <!-- page start-->
              <section class="panel">
                  <header class="panel-heading">
                      VIEW USABLE TECHNOLOGY
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
                        <!--  <div class="clearfix">
                              <div class="btn-group">
                                  <button id="editable-sample_new" class="btn green">
                                      Add New <i class="fa fa-plus"></i>
                                  </button>
                              </div>
                              <div class="btn-group pull-right">
                                  <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                                  </button>
                                  <ul class="dropdown-menu pull-right">
                                      <li><a href="#">Print</a></li>
                                      <li><a href="#">Save as PDF</a></li>
                                      <li><a href="#">Export to Excel</a></li>
                                  </ul>
                              </div>
                          </div>-->
                          <div class="space15"></div>
                          <table class="table table-striped table-hover table-bordered" id="editable-sample">
                              <thead>
                              <tr>
                                  <th>Title</th>                            
                                 <th>Technology Image</th>
                                  <th>Technology Status</th>
                                  <th style="width:150px;">Action</th>
                                  
                              </tr>
                              </thead>
                              <tbody>
							   @foreach($all_technology as $v_tech)
                              <tr class="">
                                  <td class="center">{{$v_tech->technology_title}}</td>
                                  
                                  <td class="center"><img src="{{URL::to($v_tech->technology_img)}}" style="width:50px;height:50px;"></td>
                                  <td class="center">
								  @if($v_tech->technology_status==1)
									<button type="button" class="btn btn-success btn-xs">PUBLISHED</button>                                    
                                  @else
								   <button type="button" class="btn btn-default btn-xs">UNPUBLISHED</button>                                   
                                  @endif
								  
								  </td>
                                  <td style="width:150px;">
								        @if($v_tech->technology_status==1)
								        <a  href="{{URL::to('/unpublish-technology/'.$v_tech->technology_id)}}">
								          <button type="button" class="btn btn-default" title="Unpublished ?"><i class="fa fa-thumbs-down"></i></button>
								        </a>
										@else
								        <a  href="{{URL::to('/publish-technology/'.$v_tech->technology_id)}}">
								          <button type="button" class="btn btn-success" title="Published ?"><i class="fa fa-thumbs-up"></i></button>
								        </a>
										 @endif
								        <a  href="{{URL::to('/edit-technology/'.$v_tech->technology_id)}}">
								          <button type="button" class="btn btn-info" title="Edit ?"><i class="fa fa-edit"></i></button>
								        </a>
										<a onclick="return confirm('Are you sure to delete this ?')" href="{{URL::to('/delete-technology/'.$v_tech->technology_id)}}">
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