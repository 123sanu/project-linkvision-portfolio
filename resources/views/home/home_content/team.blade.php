@extends('home.home')
@section('team')

@foreach($all_team as $v_team)
<div class="col span-1-of-4 box" style="margin-left:0px;float:left;height:270px">
				<figure>
					<img src="{{$v_team->image}}" alt="Link Vision" style="height:200px; width:200px;">
					<figcaption>
						<h4>{{$v_team->full_name}}</h4>
						<p>{{$v_team->designation}}</p>
					</figcaption>
				</figure>
			</div>

@endforeach
 
@endsection