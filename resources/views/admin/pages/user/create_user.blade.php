@extends('master')
@section('content')
<h1>Create User</h1>
<hr>
<form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">User Name</label>
        <input type="text" class="form-control" name="username" required="required" placeholder="Enter user name"
      </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" name="email" required="required" placeholder="Enter user email address">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Contact Number</label>
      <input type="number" id="UserMobile"  class="form-control" name="name="phone_number" required="required" placeholder="Enter user contact number">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Address</label>
        <input type="text" class="form-control" name="address" required="required" placeholder="Enter user address">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">User Image</label>
        <input type="file" class="form-control" name="userImage"><br>
      </div>
    <button type="submit" class="btn btn-success">Submit</button>
  </form>
@endsection