@extends('home.home')
@section('service')

@foreach($all_service as $v_service)

<div class="col span-1-of-3 box" style="margin-left:0px;width:33.33%;float:left;height:220px">
	<img src="{{$v_service->service_img}}" alt="Web Design and Development Logo">
	<h3>
		<a href="#">{{$v_service->service_title}}</a>
	</h3>
	<p>{{$v_service->service_desc}}</p>
</div>
 @endforeach
 
@endsection