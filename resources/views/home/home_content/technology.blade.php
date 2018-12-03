@extends('home.home')
@section('technology')

@foreach($all_technology as $v_tech)

<div>
	<img src="{{$v_tech->technology_img }}">
</div>
@endforeach
 
@endsection