@extends('admin.admin_master')
@section('content')


<div class="row">
   
                  <div class="col-lg-8">
                      <section class="panel">
                <header class="panel-heading">
                Add Process
				<strong style="color:green; margin-left:20px;font-size:15px !important;">
                <?php
                $insert = Session::get('insert');
                if(isset($insert)){
                    echo $insert;
                    Session::put('insert',NULL);
                }
                ?>
            </strong>
            <strong style="color:red; margin-left:20px;font-size:15px !important;">
                <?php
                $exception = Session::get('exception');
                if(isset($exception)){
                    echo $exception;
                    Session::put('exception',NULL);
                }
                ?>
            </strong>
			<strong style="color:red; margin-left:20px;font-size:15px !important;">
                <?php
                $blank = Session::get('blank');
                if(isset($blank)){
                    echo $blank;
                    Session::put('blank',NULL);
                }
                ?>
            </strong>
        </header>
                          <div class="panel-body">
                             {!! Form::open(['url' => 'save-process','method'=>'post', 'enctype'=>'multipart/form-data', 'class' => 'form-horizontal tasi-form']) !!} 
                                  
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Process Title</label>
                                      <input type="text" name="process_title" class="form-control" id="exampleInputPassword1" placeholder="Process Title">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Process Description</label>
                                     <!-- <input type="text" name="web" class="form-control" id="exampleInputPassword1" placeholder="Web Address">-->
                                      <textarea type="text" name="process_desc" class="form-control"></textarea>
								  </div>
                                  
                            
                              <div class="form-group">
                                          <!--<label class="control-label col-md-3">Service Image</label>-->
										   <label for="exampleInputPassword1" class="control-label col-md-3">Process Image</label>
                                          <div class="col-md-9">
                                              <div class="fileupload fileupload-new" data-provides="fileupload">
                                                  <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                     <!-- <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="Link Vision" />-->
                                                  </div>
                                                  <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                  <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                   <input type="file" class="default" name="process_img"/>
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
                              <button class="btn  btn-success" type="submit" >Save Process</button>
                              </div>
                          </div>
                          {!! Form::close() !!}
                      </section>
                  </div>
     
    </div>
@endsection