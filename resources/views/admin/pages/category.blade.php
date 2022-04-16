@extends('master')
@section('content')
<h1>Category List</h1>
<hr>
@if(session()->has('success'))
<p class="alert alert-success">
  {{session()->get('success')}}
</p>
@endif

@if(session()->has('danger'))
<p class="alert alert-danger">
  {{session()->get('danger')}}
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
<a href="{{route('category.create')}}" class="btn btn-primary">Create Category</a><br><br>
<div>
    <table id="dataTable" class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Details</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category as $key=>$category)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$category->name}}</td>
                <td>{{$category->details}}</td>
                <td>
                    <a href="{{route('edit.category', $category->id)}}"><i class="fas fa-edit"></i></a>
                    <a href="{{route('delete.category', $category->id)}}"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
