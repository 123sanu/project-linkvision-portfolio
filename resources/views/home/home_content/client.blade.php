@extends('home.home')
@section('client')

@foreach($all_client as $v_client)

<div class="slide">
	<img src="{{$v_client->client_img }}">				
</div>


@endforeach
 
@endsection