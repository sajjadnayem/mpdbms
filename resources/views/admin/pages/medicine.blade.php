@extends('master')
@section('content')
<h1>Medicine List</h1>
<a href="{{route('medicine.create')}}">Create Medicine</a>
<div>
    <table class="table table-bordered">
        <thead>
            <th scope="col">ID</th>
            <th scope="col">Medicine Name</th>
            <th scope="col">Category Name</th>
            <th scope="col">Generic Name</th>
            <th scope="col">Details</th>
            <th scope="col">Image</th>
        </thead>
        <tbody>
            @foreach ($medicine as $key=>$item)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$item->name}}</td>
                <td>{{optional($item->category)->name}}</td>
                <td>{{optional($item->generic)->name}}</td>
                <td>{{$item->details}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
