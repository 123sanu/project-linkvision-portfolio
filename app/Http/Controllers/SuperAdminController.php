<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;
session_start();
class SuperAdminController extends Controller
{ 

    public function index() {
         $admin_id = Session::get('id');
        if ($admin_id == NULL) {
            return Redirect::to('/admin')->send();
        } else {
			//$dashboard = view('admin.admin_content.dashboard');
            return view('admin.admin_master');
			        //  ->with('content',$dashboard);
        }
    } 
    public function dashboard(){
		return view('admin.admin_content.dashboard');
	}	
    public function services(){
		return view('admin.admin_content.service_page');
	}
	
	 public function save_service(Request $request){
		$data = array();
		$data['service_title'] = $request->service_title;
		$data['service_desc'] = $request->service_desc;
		$image = $request->file('service_img');	
		if($data['service_title'] != '' AND $data['service_desc'] != ''){
			if($image){
           $image_name = rand(111,999);
           $ext = strtolower($image->getClientOriginalExtension());           
           $image_full_name = $image_name.'.'.$ext;          
           $upload_path = 'service_image/';
           $image_url = $upload_path.$image_full_name;		   
           $success = $image->move($upload_path,$image_full_name);
           if($success){
               $data['service_img'] = $image_url;
               DB::table('tbl_service')
                 ->insert($data);
               Session::put('insert','<span id="successMessage" class="span-succ">'.'<i class="fa fa-check-square-o">'.'</i>'.'&nbsp;Dada Successfully Inserted !'.' </span>');
               return Redirect::to('/services');
           }
       }else{
           Session::put('exception','<span id="errorMessage" class="span-error">'.'<i class="fa fa-minus-square-o">'.'</i>'.'&nbsp;Please Insert Your Image !'.' </span>');
           return Redirect::to('/services');
       }
		}else{
			Session::put('blank','<span id="errorMessage" class="span-error">'.'<i class="fa fa-minus-square-o">'.'</i>'.'&nbsp;Please Fill Out both input !'.' </span>');
           return Redirect::to('/services');
		}
	}
	public function edit_service($service_id){
		 $sql = DB::table('tbl_service')
                   ->where('service_id',$service_id)
                   ->first();
        if($sql){
            $update_service = view('admin.admin_content.edit_service_page')
			                 ->with('uniq_service',$sql);         
			
			return view('admin.admin_master')
                   ->with('content',$update_service);
        }
	}
	
	public function update_service(Request $request){
		$data = array();
		$service_id = $request->service_id;
        $data['service_title'] = $request->service_title;	
        $data['service_desc'] = $request->service_desc;	
		$image = $request->file('service_img');	
		
		if($image){
           $image_name = rand(111,999);
           $ext = strtolower($image->getClientOriginalExtension());           
           $image_full_name = $image_name.'.'.$ext;          
           $upload_path = 'service_image/';
           $image_url = $upload_path.$image_full_name;		   
           $success = $image->move($upload_path,$image_full_name);
           if($success){
               $data['service_img'] = $image_url;
               DB::table('tbl_service')
                   ->where('service_id', $service_id)
                   ->update($data);
               Session::put('update','<span id="successMessage" class="span-succ">'.'<i class="fa fa-check-square-o">'.'</i>'.'&nbsp;Dada Successfully Uptodate With Image!'.' </span>');
               return Redirect::to('/view-service');
           }
       }else{
		         DB::table('tbl_service')
                   ->where('service_id', $service_id)
                   ->update($data);
               Session::put('update','<span id="successMessage" class="span-succ">'.'<i class="fa fa-check-square-o">'.'</i>'.'&nbsp;Dada Successfully Uptodate Without Image!'.' </span>');
               return Redirect::to('/view-service'); 		   
	   }
	}
	
	public function view_service(){
		$sql = DB::table('tbl_service')
                  ->get(); 
		$manage_service = view('admin.admin_content.service_view')
                       ->with('all_service',$sql);
		return view('admin.admin_master')
             ->with('content',$manage_service);		
	}
	
	public function unpublish_service($service_id){
			
        $sql = DB::table('tbl_service')
                   ->where('service_id',$service_id)
                   ->update(['service_status'=>0]);
        if($sql){
            Session::put('unpublis','Update Status Published To Unpublished');
            return Redirect::to('/view-service');
        }
    }
    public function publish_service($service_id){
        $sql = DB::table('tbl_service')
                   ->where('service_id',$service_id)
                   ->update(['service_status'=>1]);
        if($sql){
            Session::put('unpublis','Update Status Unpublished to Published');
            return Redirect::to('/view-service');
        }
    }
	
	
	public function delete_service($service_id){
		DB::table('tbl_service')->where('service_id', $service_id)->delete();
		Session::put('delete','<span id="successMessage" class="span-succ">'.'<i class="fa fa-check-square-o">'.'</i>'.'&nbsp;Dada Successfully Deleted!'.' </span>');
        return Redirect::to('/view-service');
	}
	
	public function delete_project($project_id){
		DB::table('tbl_project')->where('project_id', $project_id)->delete();
		Session::put('delete','<span id="successMessage" class="span-succ">'.'<i class="fa fa-check-square-o">'.'</i>'.'&nbsp;Dada Successfully Deleted!'.' </span>');
        return Redirect::to('/view-project');
	}
	
	public function delete_technology($technology_id){
		DB::table('tbl_technology')->where('technology_id', $technology_id)->delete();
		Session::put('delete','<span id="successMessage" class="span-succ">'.'<i class="fa fa-check-square-o">'.'</i>'.'&nbsp;Dada Successfully Deleted!'.' </span>');
        return Redirect::to('/view-technology');
	}
	
	public function delete_process($process_id){
		DB::table('tbl_process')->where('process_id', $process_id)->delete();
		Session::put('delete','<span id="successMessage" class="span-succ">'.'<i class="fa fa-check-square-o">'.'</i>'.'&nbsp;Dada Successfully Deleted!'.' </span>');
        return Redirect::to('/view-process');
	}
	
	public function delete_client($client_id){
		DB::table('tbl_client')->where('client_id', $client_id)->delete();
		Session::put('delete','<span id="successMessage" class="span-succ">'.'<i class="fa fa-check-square-o">'.'</i>'.'&nbsp;Dada Successfully Deleted!'.' </span>');
        return Redirect::to('/view-client');
	}
	
	public function delete_team_member($team_id){
		DB::table('tbl_team')->where('team_id', $team_id)->delete();
		Session::put('delete','<span id="successMessage" class="span-succ">'.'<i class="fa fa-check-square-o">'.'</i>'.'&nbsp;Dada Successfully Deleted!'.' </span>');
        return Redirect::to('/view-team-member');
	}
	
	
	
	/*code for technology insert disolay update delete*/
	 public function project(){
		return view('admin.admin_content.project_page');
	}
	public function save_project(Request $request){
		$data['project_title'] = $request->project_title;
		$data['project_href'] = $request->project_href;
		$data['project_url'] = $request->project_url;
		$image = $request->file('project_img');
		
		if($data['project_title'] !='' AND $data['project_href'] !='' AND $data['project_url'] !=''){
		   if($image){
           $image_name = rand(111,999);
           $ext = strtolower($image->getClientOriginalExtension());           
           $image_full_name = $image_name.'.'.$ext;          
           $upload_path = 'project_image/';
           $image_url = $upload_path.$image_full_name;

           $success = $image->move($upload_path,$image_full_name);
           if($success){
               $data['project_img'] = $image_url;
               DB::table('tbl_project')
                 ->insert($data);
               Session::put('insert','<span id="successMessage" class="span-succ">'.'<i class="fa fa-check-square-o">'.'</i>'.'&nbsp;Dada Successfully Inserted !'.' </span>');
               return Redirect::to('/project');
           }
       }else{
           Session::put('exception','<span id="errorMessage" class="span-error">'.'<i class="fa fa-minus-square-o">'.'</i>'.'&nbsp;Please Insert Your Image !'.' </span>');
           return Redirect::to('/project');
       }
		}else{
			Session::put('blank','<span id="errorMessage" class="span-error">'.'<i class="fa fa-minus-square-o">'.'</i>'.'&nbsp;Please Fill Out both input !'.' </span>');
           return Redirect::to('/project');
		}
			
	}
	public function edit_project($project_id){
		 $sql = DB::table('tbl_project')
                   ->where('project_id',$project_id)
                   ->first();
        if($sql){
            $update_project = view('admin.admin_content.edit_project_page')
			                 ->with('uniq_project',$sql);         
			
			return view('admin.admin_master')
                   ->with('content',$update_project);
        }
	}
	
	public function update_project(Request $request){
		$data = array();
		$project_id = $request->project_id;
        $data['project_title'] = $request->project_title;	
        $data['project_href'] = $request->project_href;	
        $data['project_url'] = $request->project_url;	
		$image = $request->file('project_img');	
		
		if($image){
           $image_name = rand(111,999);
           $ext = strtolower($image->getClientOriginalExtension());           
           $image_full_name = $image_name.'.'.$ext;           
           $upload_path = 'project_image/';
           $image_url = $upload_path.$image_full_name;		   
           $success = $image->move($upload_path,$image_full_name);
           if($success){
               $data['project_img'] = $image_url;
               DB::table('tbl_project')
                   ->where('project_id', $project_id)
                   ->update($data);
               Session::put('update','<span id="successMessage" class="span-succ">'.'<i class="fa fa-check-square-o">'.'</i>'.'&nbsp;Dada Successfully Uptodate With Image!'.' </span>');
               return Redirect::to('/view-project');
           }
       }else{
		         DB::table('tbl_project')
                   ->where('project_id', $project_id)
                   ->update($data);
               Session::put('update','<span id="successMessage" class="span-succ">'.'<i class="fa fa-check-square-o">'.'</i>'.'&nbsp;Dada Successfully Uptodate Without Image!'.' </span>');
               return Redirect::to('/view-project'); 		   
	   }
	}
	
	public function view_project(){
		$sql = DB::table('tbl_project')
                  ->get(); 
		$manage_project = view('admin.admin_content.project_view')
                       ->with('all_project',$sql);
		return view('admin.admin_master')
             ->with('content',$manage_project);		
	}
	
	
	public function unpublish_project($project_id){
			
        $sql = DB::table('tbl_project')
                   ->where('project_id',$project_id)
                   ->update(['project_status'=>0]);
        if($sql){
            Session::put('unpublis','Update Status Published To Unpublished');
            return Redirect::to('/view-project');
        }
    }
    public function publish_project($project_id){
        $sql = DB::table('tbl_project')
                   ->where('project_id',$project_id)
                   ->update(['project_status'=>1]);
        if($sql){
            Session::put('unpublis','Update Status Unpublished to Published');
            return Redirect::to('/view-project');
        }
    }
	
	/*code for works insert edit delete display*/
	
	
	
	/*code for techlology insert edit delete display*/
	
	 public function technology(){
		return view('admin.admin_content.technology_page');
	}
	public function save_technology(Request $request){
		$data['technology_title'] = $request->technology_title;		
		$image = $request->file('technology_img');
		
		if($data['technology_title'] !=''){
			if($image){
           $image_name = rand(111,999);
           $ext = strtolower($image->getClientOriginalExtension());           
           $image_full_name = $image_name.'.'.$ext;          
           $upload_path = 'tecnology_image/';
           $image_url = $upload_path.$image_full_name;

           $success = $image->move($upload_path,$image_full_name);
           if($success){
               $data['technology_img'] = $image_url;
               DB::table('tbl_technology')
                 ->insert($data);
               Session::put('insert','<span id="successMessage" class="span-succ">'.'<i class="fa fa-check-square-o">'.'</i>'.'&nbsp;Dada Successfully Inserted !'.' </span>');
               return Redirect::to('/technology');
           }
       }else{
           Session::put('exception','<span id="errorMessage" class="span-error">'.'<i class="fa fa-minus-square-o">'.'</i>'.'&nbsp;Please Insert Your Image !'.' </span>');
           return Redirect::to('/technology');
       }
		}else{
			Session::put('blank','<span id="errorMessage" class="span-error">'.'<i class="fa fa-minus-square-o">'.'</i>'.'&nbsp;Please Fill Out both input !'.' </span>');
           return Redirect::to('/technology');
		}	
	}
	public function edit_technology($technology_id){
		 $sql = DB::table('tbl_technology')
                   ->where('technology_id',$technology_id)
                   ->first();
        if($sql){
            $update_technology = view('admin.admin_content.edit_technology_page')
			                 ->with('uniq_technology',$sql);         
			
			return view('admin.admin_master')
                   ->with('content',$update_technology);
        }
	}
	
	public function update_technology(Request $request){
		$data = array();
		$technology_id = $request->technology_id;
        $data['technology_title'] = $request->technology_title;	
       
        	
		$image = $request->file('technology_img');	
		
		if($image){
           $image_name = rand(111,999);
           $ext = strtolower($image->getClientOriginalExtension());           
           $image_full_name = $image_name.'.'.$ext;           
           $upload_path = 'technology_image/';
           $image_url = $upload_path.$image_full_name;		   
           $success = $image->move($upload_path,$image_full_name);
           if($success){
               $data['technology_img'] = $image_url;
               DB::table('tbl_technology')
                   ->where('technology_id', $technology_id)
                   ->update($data);
               Session::put('update','<span id="successMessage" class="span-succ">'.'<i class="fa fa-check-square-o">'.'</i>'.'&nbsp;Dada Successfully Uptodate With Image!'.' </span>');
               return Redirect::to('/view-technology');
           }
       }else{
		         DB::table('tbl_technology')
                   ->where('technology_id', $technology_id)
                   ->update($data);
               Session::put('update','<span id="successMessage" class="span-succ">'.'<i class="fa fa-check-square-o">'.'</i>'.'&nbsp;Dada Successfully Uptodate Without Image!'.' </span>');
               return Redirect::to('/view-technology'); 		   
	   }
	}
	
	public function view_technology(){
		$sql = DB::table('tbl_technology')
                  ->get(); 
		$manage_technology = view('admin.admin_content.technology_view')
                       ->with('all_technology',$sql);
		return view('admin.admin_master')
             ->with('content',$manage_technology);		
	}
	
	
	public function unpublish_technology($technology_id){
			
        $sql = DB::table('tbl_technology')
                   ->where('technology_id',$technology_id)
                   ->update(['technology_status'=>0]);
        if($sql){
            Session::put('unpublis','Update Status Published To Unpublished');
            return Redirect::to('/view-technology');
        }
    }
    public function publish_technology($technology_id){
        $sql = DB::table('tbl_technology')
                   ->where('technology_id',$technology_id)
                   ->update(['technology_status'=>1]);
        if($sql){
            Session::put('unpublis','Update Status Unpublished to Published');
            return Redirect::to('/view-technology');
        }
    }
	
	/*code for technology insert disolay update delete*/
	
	
	/*code for Development Process insert edit delete display*/
	
	 public function process(){
		return view('admin.admin_content.process_page');
	}
	public function save_process(Request $request){
		$data['process_title'] = $request->process_title;
		$data['process_desc'] = $request->process_desc;
		
		$image = $request->file('process_img');
		
		if($data['process_title'] !='' AND $data['process_desc'] !=''){
			if($image){
           $image_name = rand(111,999);
           $ext = strtolower($image->getClientOriginalExtension());           
           $image_full_name = $image_name.'.'.$ext;          
           $upload_path = 'process_image/';
           $image_url = $upload_path.$image_full_name;

           $success = $image->move($upload_path,$image_full_name);
           if($success){
               $data['process_img'] = $image_url;
               DB::table('tbl_process')
                 ->insert($data);
               Session::put('insert','<span id="successMessage" class="span-succ">'.'<i class="fa fa-check-square-o">'.'</i>'.'&nbsp;Dada Successfully Inserted !'.' </span>');
               return Redirect::to('/process');
           }
       }else{
           Session::put('exception','<span id="errorMessage" class="span-error">'.'<i class="fa fa-minus-square-o">'.'</i>'.'&nbsp;Please Insert Your Image !'.' </span>');
           return Redirect::to('/process');
       }
		}else{
			Session::put('blank','<span id="errorMessage" class="span-error">'.'<i class="fa fa-minus-square-o">'.'</i>'.'&nbsp;Please Fill Out Both Input !'.' </span>');
           return Redirect::to('/process');
		}	
	}
	
	public function edit_process($process_id){
		 $sql = DB::table('tbl_process')
                   ->where('process_id',$process_id)
                   ->first();
        if($sql){
            $update_process = view('admin.admin_content.edit_process_page')
			                 ->with('uniq_process',$sql);         
			
			return view('admin.admin_master')
                   ->with('content',$update_process);
        }
	}
	
	public function update_process(Request $request){
		$data = array();
		$process_id = $request->process_id;
        $data['process_title'] = $request->process_title;	
        $data['process_desc'] = $request->process_desc;	
        	
		$image = $request->file('process_img');	
		
		if($image){
           $image_name = rand(111,999);
           $ext = strtolower($image->getClientOriginalExtension());           
           $image_full_name = $image_name.'.'.$ext;           
           $upload_path = 'process_image/';
           $image_url = $upload_path.$image_full_name;		   
           $success = $image->move($upload_path,$image_full_name);
           if($success){
               $data['process_img'] = $image_url;
               DB::table('tbl_process')
                   ->where('process_id', $process_id)
                   ->update($data);
               Session::put('update','<span id="successMessage" class="span-succ">'.'<i class="fa fa-check-square-o">'.'</i>'.'&nbsp;Dada Successfully Uptodate With Image!'.' </span>');
               return Redirect::to('/view-process');
           }
       }else{
		         DB::table('tbl_process')
                   ->where('process_id', $process_id)
                   ->update($data);
               Session::put('update','<span id="successMessage" class="span-succ">'.'<i class="fa fa-check-square-o">'.'</i>'.'&nbsp;Dada Successfully Uptodate Without Image!'.' </span>');
               return Redirect::to('/view-process'); 		   
	   }
	}
	
	public function view_process(){
		$sql = DB::table('tbl_process')
                  ->get(); 
		$manage_process = view('admin.admin_content.process_view')
                       ->with('all_process',$sql);
		return view('admin.admin_master')
             ->with('content',$manage_process);		
	}
	
	
	public function unpublish_process($process_id){
			
        $sql = DB::table('tbl_process')
                   ->where('process_id',$process_id)
                   ->update(['process_status'=>0]);
        if($sql){
            Session::put('unpublis','Update Status Published To Unpublished');
            return Redirect::to('/view-process');
        }
    }
    public function publish_process($process_id){
        $sql = DB::table('tbl_process')
                   ->where('process_id',$process_id)
                   ->update(['process_status'=>1]);
        if($sql){
            Session::put('unpublis','Update Status Unpublished to Published');
            return Redirect::to('/view-process');
        }
    }
	
	/*End code for Development Process insert disolay update delete*/
	
	
	/*code for Client insert edit delete display*/
	
	 public function client(){
		return view('admin.admin_content.client_page');
	}
	public function save_client(Request $request){
		$data['client_title'] = $request->client_title;		
		
		$image = $request->file('client_img');
		
		if($data['client_title'] !=''){
			if($image){
           $image_name = rand(111,999);
           $ext = strtolower($image->getClientOriginalExtension());           
           $image_full_name = $image_name.'.'.$ext;          
           $upload_path = 'client_image/';
           $image_url = $upload_path.$image_full_name;

           $success = $image->move($upload_path,$image_full_name);
           if($success){
               $data['client_img'] = $image_url;
               DB::table('tbl_client')
                 ->insert($data);
               Session::put('insert','<span id="successMessage" class="span-succ">'.'<i class="fa fa-check-square-o">'.'</i>'.'&nbsp;Dada Successfully Inserted !'.' </span>');
               return Redirect::to('/client');
           }
       }else{
           Session::put('exception','<span id="errorMessage" class="span-error">'.'<i class="fa fa-minus-square-o">'.'</i>'.'&nbsp;Please Insert Your Image !'.' </span>');
           return Redirect::to('/client');
       }
		}else{
			Session::put('blank','<span id="errorMessage" class="span-error">'.'<i class="fa fa-minus-square-o">'.'</i>'.'&nbsp;Please Fill Out both input !'.' </span>');
           return Redirect::to('/client');
		}			
	}
	public function edit_client($client_id){
		 $sql = DB::table('tbl_client')
                   ->where('client_id',$client_id)
                   ->first();
        if($sql){
            $update_client = view('admin.admin_content.edit_client_page')
			                 ->with('uniq_client',$sql);         
			
			return view('admin.admin_master')
                   ->with('content',$update_client);
        }
	}
	
	public function update_client(Request $request){
		$data = array();
		$client_id = $request->client_id;
        $data['client_title'] = $request->client_title;	
        	
		$image = $request->file('client_img');	
		
		if($image){
           $image_name = rand(111,999);
           $ext = strtolower($image->getClientOriginalExtension());           
           $image_full_name = $image_name.'.'.$ext;           
           $upload_path = 'client_image/';
           $image_url = $upload_path.$image_full_name;		   
           $success = $image->move($upload_path,$image_full_name);
           if($success){
               $data['client_img'] = $image_url;
               DB::table('tbl_client')
                   ->where('client_id', $client_id)
                   ->update($data);
               Session::put('update','<span id="successMessage" class="span-succ">'.'<i class="fa fa-check-square-o">'.'</i>'.'&nbsp;Dada Successfully Uptodate With Image!'.' </span>');
               return Redirect::to('/view-client');
           }
       }else{
		         DB::table('tbl_client')
                   ->where('client_id', $client_id)
                   ->update($data);
               Session::put('update','<span id="successMessage" class="span-succ">'.'<i class="fa fa-check-square-o">'.'</i>'.'&nbsp;Dada Successfully Uptodate Without Image!'.' </span>');
               return Redirect::to('/view-client'); 		   
	   }
	}
	
	public function view_client(){
		$sql = DB::table('tbl_client')
                  ->get(); 
		$manage_client = view('admin.admin_content.client_view')
                       ->with('all_client',$sql);
		return view('admin.admin_master')
             ->with('content',$manage_client);		
	}
	
	
	public function unpublish_client($client_id){
			
        $sql = DB::table('tbl_client')
                   ->where('client_id',$client_id)
                   ->update(['client_status'=>0]);
        if($sql){
            Session::put('unpublis','Update Status Published To Unpublished');
            return Redirect::to('/view-client');
        }
    }
    public function publish_client($client_id){
        $sql = DB::table('tbl_client')
                   ->where('client_id',$client_id)
                   ->update(['client_status'=>1]);
        if($sql){
            Session::put('unpublis','Update Status Unpublished to Published');
            return Redirect::to('/view-client');
        }
    }
	
	/*End code for Client insert disolay update delete*/
	
	/*code for Team Member insert edit delete display*/
	
	 public function team_member(){
		return view('admin.admin_content.team_page');
	}
	public function save_team_member(Request $request){
		$data['full_name'] = $request->full_name;		
		$data['designation'] = $request->designation;			
		
		$image = $request->file('image');
		
		if($data['full_name'] !='' AND $data['designation'] !=''){
			if($image){
           $image_name = rand(111,999);
           $ext = strtolower($image->getClientOriginalExtension());           
           $image_full_name = $image_name.'.'.$ext;          
           $upload_path = 'team_image/';
           $image_url = $upload_path.$image_full_name;

           $success = $image->move($upload_path,$image_full_name);
           if($success){
               $data['image'] = $image_url;
               DB::table('tbl_team')
                 ->insert($data);
               Session::put('insert','<span id="successMessage" class="span-succ">'.'<i class="fa fa-check-square-o">'.'</i>'.'&nbsp;Dada Successfully Inserted !'.' </span>');
               return Redirect::to('/team-member');
           }
       }else{
           Session::put('exception','<span id="errorMessage" class="span-error">'.'<i class="fa fa-minus-square-o">'.'</i>'.'&nbsp;Please Insert Your Image !'.' </span>');
           return Redirect::to('/team-member');
       }
		}else{
			Session::put('blank','<span id="errorMessage" class="span-error">'.'<i class="fa fa-minus-square-o">'.'</i>'.'&nbsp;Please Fill Out both input !'.' </span>');
           return Redirect::to('/team-member');
		}	
	}
	public function edit_team_member($team_id){
		 $sql = DB::table('tbl_team')
                   ->where('team_id',$team_id)
                   ->first();
        if($sql){
            $update_team = view('admin.admin_content.edit_team_page')
			                 ->with('uniq_team',$sql);         
			
			return view('admin.admin_master')
                   ->with('content',$update_team);
        }
	}
	
	public function update_team_member(Request $request){
		$data = array();
		$team_id = $request->team_id;
        $data['full_name'] = $request->full_name;	
        $data['designation'] = $request->designation;	
        	
        	
		$image = $request->file('image');	
		
		if($image){
           $image_name = rand(111,999);
           $ext = strtolower($image->getClientOriginalExtension());           
           $image_full_name = $image_name.'.'.$ext;           
           $upload_path = 'team_image/';
           $image_url = $upload_path.$image_full_name;		   
           $success = $image->move($upload_path,$image_full_name);
           if($success){
               $data['image'] = $image_url;
               DB::table('tbl_team')
                   ->where('team_id', $team_id)
                   ->update($data);
               Session::put('update','<span id="successMessage" class="span-succ">'.'<i class="fa fa-check-square-o">'.'</i>'.'&nbsp;Dada Successfully Uptodate With Image!'.' </span>');
               return Redirect::to('/view-team-member');
           }
       }else{
		         DB::table('tbl_team')
                   ->where('team_id', $team_id)
                   ->update($data);
               Session::put('update','<span id="successMessage" class="span-succ">'.'<i class="fa fa-check-square-o">'.'</i>'.'&nbsp;Dada Successfully Uptodate Without Image!'.' </span>');
               return Redirect::to('/view-team-member'); 		   
	   }
	}
	
	public function view_team_member(){
		$sql = DB::table('tbl_team')
                  ->get(); 
		$manage_team = view('admin.admin_content.team_view')
                       ->with('all_team',$sql);
		return view('admin.admin_master')
             ->with('content',$manage_team);		
	}
	
	
	public function unpublish_team_member($team_id){
			
        $sql = DB::table('tbl_team')
                   ->where('team_id',$team_id)
                   ->update(['status'=>0]);
        if($sql){
            Session::put('unpublis','Update Status Published To Unpublished');
            return Redirect::to('/view-team-member');
        }
    }
    public function publish_team_member($team_id){
        $sql = DB::table('tbl_team')
                   ->where('team_id',$team_id)
                   ->update(['status'=>1]);
        if($sql){
            Session::put('unpublis','Update Status Unpublished to Published');
            return Redirect::to('/view-team-member');
        }
    }
	
	/*code for Development Process insert disolay update delete*/
	
	
     public function logout() {
        Session::put('full_name','');
        Session::put('id', '');
        Session::put('confirm', 'You Successfully loged out !');
        return Redirect::to('/admin');
    }

    //friends and family  
	// hasan.mahafuz@linkvisionsoft.com
    // ma.hasan@bg.com.bd

}
