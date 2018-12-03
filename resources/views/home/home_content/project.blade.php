
@extends('home.home')
@section('project')

@foreach($all_project as $v_project)

<div class="portfolio-pavilion">
					<div class="col span-5-of-8">
						<img class="portfolio-img" src="{{$v_project->project_img}}" alt="Pavilion">
					</div>
					<div class="col span-3-of-8">
						<h3 class="project-name">{{$v_project->project_title}}</h3>
						<div class="portfolio-dsp">
							<p>Technology:</p>
							<div class="portfolio-dsp-icon">
								<span data-tooltip=".Net Development" class="icon"><img src="{{URL::to('public/ico/net.png')}}"></span>
								<span data-tooltip="PHP" class="icon"><img src="{{URL::to('public/ico/php.png')}}"></span>
								<span data-tooltip="WordPress" class="icon"><img src="{{URL::to('public/ico/wp.png')}}"></span>
								<span data-tooltip="Android" class="icon"><img src="{{URL::to('public/ico/and.png')}}"></span>
								
							</div>
						</div>
						<div class="portfolio-dsp">
							<p>Team:</p>
							<div class="portfolio-dsp-icon">
								<span data-tooltip="Member" class="icon"><img src="{{URL::to('public/ico/tem.png')}}"></span>
							</div>
						</div>
						<div class="portfolio-dsp">
							<p>Services:</p>
							<div class="portfolio-dsp-icon">
								<span data-tooltip="eCommerce Solution" class="icon"><img src="{{URL::to('public/ico/ser2.png')}}"></span>
								<span data-tooltip="Application Development" class="icon"><img src="{{URL::to('public/ico/ser1.png')}}"></span>
								<span data-tooltip="Support / Maintenance" class="icon"><img src="{{URL::to('public/ico/ser3.png')}}"></span>
								<span data-tooltip="Deployment &amp; Hosting" class="icon"><img src="{{URL::to('public/ico/ser4.png')}}"></span>
								
							</div>
						</div>
						<div class="portfolio-dsp">
							<p>Features:</p>
							<div class="portfolio-dsp-icon">
								<span data-tooltip="Social Network" class="icon"><img src="{{URL::to('public/ico/fet1.png')}}"></span>
								<span data-tooltip="Media Distribution" class="icon"><img src="{{URL::to('public/ico/fet2.png')}}"></span>
								<span data-tooltip="Performance Optimization" class="icon"><img src="{{URL::to('public/ico/fet3.png')}}"></span>
							</div>
						</div>
						<div class="portfolio-dsp">
							<p>Live at:</p>
							<div class="portfolio-dsp-icon">
								<a target="_blank" class="live-at" href="{{$v_project->project_href}}">{{$v_project->project_url}}</a>
							</div>
						</div>
					</div>
				</div>
	@endforeach
 
@endsection