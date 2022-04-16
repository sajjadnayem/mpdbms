@extends('master')
@section('content')
<h1>Generic List</h1>
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
<a href="{{route('generic.create')}}" class="btn btn-primary">Create Generic Name</a><br><br>
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
            @foreach ($generic as $key=>$item)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->details}}</td>
                <td>
                    <a href="{{route('generic.edit', $item->id)}}"><i class="fas fa-edit"></i></a>
                    <a href="{{route('generic.delete', $item->id)}}"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
