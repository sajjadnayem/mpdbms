@extends('master')
@section('content')
<h1>Medicine List</h1>
<a href="{{route('medicine.create')}}" class="btn btn-primary">Create Medicine</a><br><br>
<div>
    <table class="table table-bordered">
        <thead>
            <th scope="col">ID</th>
            <th scope="col">Medicine Name</th>
            <th scope="col">Category Name</th>
            <th scope="col">Generic Name</th>
            <th scope="col">Details</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </thead>
        <tbody>
            @foreach ($medicine as $key=>$item)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$item->name}}</td>
                <td>{{optional($item->category)->name}}</td>
                <td>{{optional($item->generic)->name}}</td>
                <td>{{$item->details}}</td>
                <td><img src="{{url('/uploads/medicine/'.$item->image)}}" style="border-radius:5px" width="50px" class="rounded mx-auto d-block" alt="medicine image"></td>
                <td>
                    <a href="{{route('medicine.view', $item->id)}}"><i class="fa-solid fa-eye"></i></a>
                    <a href="{{route('medicine.edit', $item->id)}}"><i class="fas fa-edit"></i></a>
                    <a href="{{route('medicine.delete', $item->id)}}"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
