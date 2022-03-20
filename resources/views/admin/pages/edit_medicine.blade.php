@extends('master')
@section('content')
<form action="{{route('medicine.update', $medicine->id)}}" method="POST" enctype="multipart/form-data">
    @method("PUT")
    @csrf
      <div class="form-group">
        <label for="name">Medicine Name</label>
        <input type="text" class="form-control" value="{{$medicine->name}}" id="name" name="name" placeholder="Enter Medicine Name">
      </div>
    <div class="form-group">
      <label for="category">Select Medicine Category</label>
      <select name="category" class="form-control">
        @foreach ($categorylist as $item)
        <option value={{$item->id}} {{$item->id == $medicine->category_id ? 'selected' : '' }}>{{$item->name}}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group">
        <label for="category">Select Generic Category</label>
        <select name="generic" class="form-control">
          <option>Select Generic Category</option>
          @foreach ($genericlist as $item)
          <option value={{$item->id}} {{$item->id == $medicine->generic_id ? 'selected' : '' }}>{{$item->name}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="name">Medicine Description</label><br>
        <textarea id="details" class="form-control" value="{{$medicine->name}}" name="details" rows="3" cols="50"></textarea>
      </div>
      <div class="mb-3">
        <label for="medicine_image" class="form-label">Insert Image</label>
        <input class="form-control" type="file" id="medicine_image" name="medicine_image">
      </div>
      <button type="submit" class="btn btn-success mb-3">Submit</button>
    </form>
@endsection
