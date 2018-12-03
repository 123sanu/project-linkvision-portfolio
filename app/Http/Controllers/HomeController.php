<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;
session_start();
class HomeController extends Controller
{
    
    public function index()
    {
		$sql = DB::table('tbl_service')
		          ->where('service_status',1)
                  ->get();
        $service = view('home.home_content.service')
                       ->with('all_service',$sql);				  
		
		$sql1 = DB::table('tbl_technology')
		          ->where('technology_status',1)
                  ->get(); 
		$technology = view('home.home_content.technology')
                       ->with('all_technology',$sql1);
		
		$sql2 = DB::table('tbl_client')
		           ->where('client_status',1)
                  ->get(); 
		$client = view('home.home_content.client')
                       ->with('all_client',$sql2);
		
		$sql3 = DB::table('tbl_team')
		           ->where('status',1)
                  ->get(); 
		$team = view('home.home_content.team')
                       ->with('all_team',$sql3);
		
		$sql4 = DB::table('tbl_process')
		           ->where('process_status',1)
                  ->get(); 
		$process = view('home.home_content.process')
                       ->with('all_process',$sql4);
					   
		$sql5 = DB::table('tbl_project')
		           ->where('project_status',1)
                  ->get(); 
		$prject = view('home.home_content.project')
                       ->with('all_project',$sql5);
	   
		
       return view('home.home')
	             ->with('service',$service)
				 ->with('technology',$technology)
				 ->with('client',$client)
				 ->with('prject',$prject)
				 ->with('process',$process)
				 ->with('team',$team);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
