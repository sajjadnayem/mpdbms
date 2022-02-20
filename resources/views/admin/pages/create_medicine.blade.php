@extends('master')
@section('content')
<h1>Create Medicine</h1>
<hr>

<form action="{{route('medicine.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
      <div class="form-group">
        <label for="name">Medicine Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Medicine Name">
      </div>
    <div class="form-group">
      <label for="category">Select Medicine Category</label>
      <select name="category" class="form-control">
        <option>Select Medicine Category</option>
        @foreach ($category as $item)
        <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group">
        <label for="category">Select Generic Category</label>
        <select name="generic" class="form-control">
          <option>Select Generic Category</option>
          @foreach ($generic as $item)
          <option value="{{$item->id}}">{{$item->name}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="name">Medicine Description</label><br>
        <textarea id="details" class="form-control" name="details" rows="3" cols="50">
          </textarea>
      </div>
      <div class="mb-3">
        <label for="medicine_image" class="form-label">Insert Image</label>
        <input class="form-control" type="file" id="medicine_image" name="medicine_image">
      </div>
      <button type="submit" class="btn btn-success mb-3">Submit</button>
    </form>
@endsection
