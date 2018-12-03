@extends('home.home')
@section('process')

@foreach($all_process as $v_process)


<div class="tab-content" id="tab-content-{{$v_process->process_id}}" style="display: none;">
	<div class="col span-1-of-4">
		<div class="icons">
		    <img src="{{$v_process->process_img}}" alt="Link Vision">
		</div>
	</div>
	<div class="col span-3-of-4">
		<h3>{{$v_process->process_title}}</h3>
		<p>{{$v_process->process_desc}}</p>
	</div>
</div>

@endforeach
 
@endsection