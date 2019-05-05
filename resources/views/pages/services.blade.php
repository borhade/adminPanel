
@extends('layouts.app')
@section('content')
<h1>{{$title}}</h1>  
<p>This is services page</p>  

	@foreach($services AS $service){

			<li>{{$service}}</li>
	}
	@endforeach	

@endsection