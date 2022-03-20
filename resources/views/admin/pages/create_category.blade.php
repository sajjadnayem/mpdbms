@extends('master')
@section('content')

<h1>Create Category</h1>
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
<form action="{{route('store.category')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="name">Category Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter Catagory Name">
    </div>
    <div class="form-group">
        <label for="name">Category Details</label>
        <input type="text" class="form-control" id="name" name="details" placeholder="Enter Catagory Details">
    </div><br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
