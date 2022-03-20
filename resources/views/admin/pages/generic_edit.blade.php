@extends('master')
@section('content')
<h1>Edit Generic</h1>
<hr>
@if(session()->has('success'))
<p class="alert alert-success">
  {{session()->get('success')}}
</p>
@endif

@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
      <li>
        {{$error}}
      </li>
    @endforeach
  </ul>
</div>
@endif
<form action="{{route('generic.update', $generic->id)}}" method="POST">
    @method('PUT')
  @csrf
      <div class="form-group">
        <label for="name">Category Name</label>
        <input type="text" class="form-control" id="name" value="{{$generic->name}}" name="name" placeholder="Enter Catagory Name">
      </div>
          <div class="form-group">
            <label for="name">Category Details</label>
            <input type="text" class="form-control" id="details" value="{{$generic->details}}" name="details" placeholder="Enter Category Details">
            </div><br>
      <button type="submit" class="btn btn-success">Update</button>
@endsection
