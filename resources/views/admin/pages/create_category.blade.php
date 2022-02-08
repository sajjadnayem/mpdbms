@extends('master')
@section('content')

<h1>Create Category</h1>
<hr>
<form>
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
