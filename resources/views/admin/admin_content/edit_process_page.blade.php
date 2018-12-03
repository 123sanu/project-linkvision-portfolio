@extends('admin.admin_master')
@section('content')


<div class="row">
    
                  <div class="col-lg-8">
                      <section class="panel">
                <header class="panel-heading">
                UPDATE DEVELOPMENT PROCESS
				
        </header>
                          <div class="panel-body">
                             {!! Form::open(['url' => 'update-process','method'=>'post', 'enctype'=>'multipart/form-data', 'class' => 'form-horizontal tasi-form']) !!} 
                                  
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Process Title</label>
                                      <input type="text" name="process_title" class="form-control" id="exampleInputPassword1" value="{{$uniq_process->process_title}}">
                                      <input type="hidden" name="process_id" value="{{$uniq_process->process_id}}">
								 </div>
                                 
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Process Description</label>
                                     
                                      <textarea type="text" name="process_desc" class="form-control">{{$uniq_process->process_desc}}</textarea>
								  </div>
                            
                              <div class="form-group">
                                          <!--<label class="control-label col-md-3">Service Image</label>-->
										   <label for="exampleInputPassword1" class="control-label col-md-3">Process Development Image</label>
                                          <div class="col-md-9">
                                              <div class="fileupload fileupload-new" data-provides="fileupload">
                                                  <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                        <img src="{{URL::to($uniq_process->process_img)}}" alt="Link Vision" />
                                                  </div>
                                                  <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                  <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                   <input type="file" class="default" name="service_img"/>
                                                   </span>
                                                      <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a>
                                                  </div>
                                              </div>
                                              
                                          </div>
                                      </div>
                                  
                          </div>
                          <div class="panel-body">
                              <div class="text-left invoice-btn">
							  <button class="btn btn-default" type="button" onclick="location.href='{{URL::to('/view-process')}}'">Back To Development Process List</button>
                              <button class="btn  btn-success" type="submit" >Update Development Process</button>							  
                              </div>
                          </div>
                          {!! Form::close() !!}
                      </section>
                  </div>
     
    </div>
@endsection