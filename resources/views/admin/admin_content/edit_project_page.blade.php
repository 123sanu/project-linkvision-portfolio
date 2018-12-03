@extends('admin.admin_master')
@section('content')


<div class="row">
    
                  <div class="col-lg-8">
                      <section class="panel">
                <header class="panel-heading">
                UPDATE PROJECT
				
            
        </header>
                          <div class="panel-body">
                             {!! Form::open(['url' => 'update-project','method'=>'post', 'enctype'=>'multipart/form-data', 'class' => 'form-horizontal tasi-form']) !!} 
                                  
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Project Title</label>
                                      <input type="text" name="project_title" class="form-control" id="exampleInputPassword1" value="{{$uniq_project->project_title}}" placeholder="Project Title">
									  <input type="hidden" name="project_id" class="form-control" id="exampleInputPassword1" value="{{$uniq_project->project_id}}" placeholder="Project Title">
                                  </div>
								  <div class="form-group">
                                      <label for="exampleInputPassword1">Project HREF</label>
                                      <input type="text" name="project_href" class="form-control" id="exampleInputPassword1" value="{{$uniq_project->project_href}}" placeholder="Project HREF">
                                  </div>
								 <div class="form-group">
                                      <label for="exampleInputPassword1">Project URL</label>
                                      <input type="text" name="project_url" class="form-control" id="exampleInputPassword1" value="{{$uniq_project->project_url}}" placeholder="Project URL">
                                  </div>
                                 
                                  
                            
                              <div class="form-group">
                                          <!--<label class="control-label col-md-3">Service Image</label>-->
										   <label for="exampleInputPassword1" class="control-label col-md-3">project Image</label>
                                          <div class="col-md-9">
                                              <div class="fileupload fileupload-new" data-provides="fileupload">
                                                  <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                     <img src="{{URL::to($uniq_project->project_img)}}" alt="Link Vision" />
                                                  </div>
                                                  <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                  <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                   <input type="file" class="default" name="project_img"/>
                                                   </span>
                                                      <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a>
                                                  </div>
                                              </div>
                                               <!--<span class="label label-danger">NOTE!</span>
                                            <span>
                                             Attached image thumbnail is
                                             supported in Latest Firefox, Chrome, Opera,
                                             Safari and Internet Explorer 10 only
                                             </span>-->
                                          </div>
                                      </div>
                                  
                          </div>
                          <div class="panel-body">
                              <div class="text-left invoice-btn">
							   <button class="btn btn-default" type="button" onclick="location.href='{{URL::to('/view-project')}}'">Back To Project List</button>
                              <button class="btn  btn-success" type="submit" >Update Project</button>
                              </div>
                          </div>
                          {!! Form::close() !!}
                      </section>
                  </div>
     
    </div>
@endsection