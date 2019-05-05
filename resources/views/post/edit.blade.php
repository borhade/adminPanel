@extends('layouts.app')

@section('content')
 <div class="col-sm-6">
    <h3 class="m-t-none m-b">Address</h3>
    {!! Form::open(['action'=>['postsController@update',$edit_data->id],'method'=>'PUT'])!!}   
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="{{$edit_data->name}}">
      </div>
      <div class="form-group">
          <label for="title">title:</label>
          <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="{{$edit_data->title}}">
      </div>
      <div class="form-group">
          <label for="body">body:</label>
          <input type="text" class="form-control" id="body" placeholder="Enter body" name="body" value="{{$edit_data->body}}">
      </div>
     {{--  {{form::hidden('_method','PUT')}} --}}
      <button type="submit" class="btn btn-default">Submit</button>  
  {!!Form::close()!!}
</div>
@endsection
